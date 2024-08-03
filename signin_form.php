<?php
session_start(); // Start a session

// Check if the form is submitted
if(isset($_POST['send'])){

    // Create a database connection
    $conn = new mysqli('localhost', 'root', '', 'book_db');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user input from the form
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['mail'];
    $phone = $_POST['number'];
    $password = $_POST['pass'];

    // Hash the password for security (you should use a better hashing method)
   

    // Prepare and execute the SQL query to insert the user into the database
    $sql = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $password);

    if ($stmt->execute()) {
        // Registration successful
        $_SESSION['user_email'] = $email; // Store user's email in a session
        header("Location: index.php"); // Redirect to a welcome page
        exit();
    } else {
        // Registration failed
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $conn->close();
}
?>
