<?php 
 

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
<title> Bag </title>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ptint.css">

</head>

<body>
    <header>
        <nav>
            <div class="logo">E-Electronics</div>
            <ul class="nav-links">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Cart.php">Cart</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="POLICY.html"> POLICY </a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="about">

      
    </section>
    <section class="team">

        <div class="team-cards">
            <!-- Cards here -->
            <!-- Card 1 -->
            <div class="card">
                <div class="card-img">
                    <img src="Bag1.jpg" alt="Bag">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Laptop Backpack  </h2>
                    <p class="card-role">450</p>
                    <p class="card-email">17 inch </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

            <!-- Card 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="bag2.jpg" alt="Bag">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Laptop Backpack</h2>
                    <p class="card-role">650</p>
                    <p class="card-email">17 inch </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

            <!-- Card 3 -->
            <div class="card">
                <div class="card-img">
                    <img src="Bag3.jpg" alt="Printers">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Laptop Backpack </h2>
                    <p class="card-role">870</p>
                    <p class="card-email">17 inch </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

             </section>
            </body>
            
            </html>