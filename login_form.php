<?php     
session_start();

    include('config.php');  
    $email = $_POST['mail'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            $_SESSION['email']=$email; 
            $_SESSION['password']=$password;
            header("Location: index.php");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     
?>  