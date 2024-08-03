let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem=3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3;i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
};

//select section js

document.addEventListener('DOMContentLoaded', function () {
  // Get the select element by its ID
  const selectElement = document.getElementById('redirect');

  // Add an event listener to the select element
  selectElement.addEventListener('change', function () {
    // Get the selected value
    const selectedValue = selectElement.value;

    // Redirect to the selected page if it's not the default option
    if (selectedValue !== 'default') {
      window.location.href = selectedValue;
    }
  });
});

// sign up js
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(800);
    
  });



  // cart

  document.addEventListener('DOMContentLoaded', function () {
    let cartItems = 0;
    let totalPrice = 0;
    const cartCount = document.getElementById('count');
    const cartTotal = document.getElementById('total');
    const cartItemsList = document.getElementById('cartItemsList');
    const checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function () {
        // Implement the logic to proceed to checkout here
        // You can use window.location to redirect the user to the checkout page
        // Example: window.location.href = 'checkout.php';
    });

    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            // Get the package title and price
            const packageTitle = this.parentElement.querySelector('h3').textContent;
            const price = parseFloat(this.getAttribute('data-price'));

            // Create a list item and add it to the cart items list
            const listItem = document.createElement('li');
            listItem.textContent = `${packageTitle} - Rs ${price.toFixed(2)}`;
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', function () {
                // Remove the item from the cart list when the "Remove" button is clicked
                cartItemsList.removeChild(listItem);

                // Update cart count and total price
                cartItems--;
                cartCount.textContent = cartItems;
                totalPrice -= price;
                cartTotal.textContent = 'Rs ' + totalPrice.toFixed(2);
            });
            listItem.appendChild(removeButton);
            cartItemsList.appendChild(listItem);

            // Update cart count and total price
            cartItems++;
            cartCount.textContent = cartItems;
            totalPrice += price;
            cartTotal.textContent = 'Rs ' + totalPrice.toFixed(2);
        });
    });
});