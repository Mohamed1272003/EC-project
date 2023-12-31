<?php 
session_start(); 
  
// Start the session 
// Check if the add to cart button is clicked 
if (isset($_POST["add_to_cart"])) { 
    
    // Get the product ID from the form 
    $product_id = $_POST["product_id"]; 
    
    // Get the product quantity from the form 
    $product_quantity = $_POST["product_quantity"]; 
  
    // Initialize the cart session variable 
    // if it does not exist 
    if (!isset($_SESSION["cart"])) { 
        $_SESSION["cart"] = []; 
        header("location:cart.php"); 
    } 
  
    // Add the product and quantity to the cart 
    $_SESSION["cart"][$product_id] = $product_quantity; 
    header("location:cart.php"); 
} 
?>
<html> 
    <title> Shop </title>
	<head>  
		<link rel="stylesheet"
				href="Style2.css"> 
	</head> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 
</head>

<body>
    <header>
        <nav>
            <div class="logo">E-Electronics</div>
            <ul class="nav-links">
            <li><a href="Home.php">Home</a></li>
            <li><a href="Shop.html">Shop</a></li>
            <li><a href="Cart.php">Cart</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="POLICY.html"> POLICY </a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.html">Logout</a></li>
            </ul>
        </nav>
    </header>
  
<li>
    <h>GFG T-Shirt</h>
    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20230407153931/gfg-tshirts.jpg" alt="Product 2">
    <p>100% cotton t-shirts</p>
    <p>
        <span>$20</span>
    </p>

    <form method="post" action="shop.php">
        <input type="hidden" name="product_id" value="2">
        <label for="product2_quantity">
            Quantity:
        </label>
        <input type="number" id="product2_quantity" name="product_quantity" value="" min="0" max="10">
        <button type="submit" name="add_to_cart">
            Add to Cart
        </button>
    </form>
</li>
</body>


</html>