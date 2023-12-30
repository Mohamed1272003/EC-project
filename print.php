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
<title> Printers </title>

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

        <div class="about-info">
            <div>
                <p>Printers with best price all over Egypt</p>

            </div>
        </div>
    </section>
    <section class="team">

        <div class="team-cards">
            <!-- Cards here -->
            <!-- Card 1 -->
            <div class="card">
                <div class="card-img">
                    <img src="print2.jpg" alt="Printers">
                </div>
                <div class="card-info">
                    <h2 class="card-name">HP Laser MFP 135w Printer </h2>
                    <p class="card-role">7,000</p>
                    <p class="card-email">Wireless Print, copy, scan </p>
                    <p><button class="button">Shop</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>
            <!-- Card 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="print3.jpg" alt="Printers">
                </div>
                <div class="card-info">
                    <h2 class="card-name">HP LaserJet MFP M141w Printer</h2>
                    <p class="card-role">7,777</p>
                    <p class="card-email">Wireless Print, Copy, Scan </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>
            <!-- Card 3 -->
            <div class="card">
                <div class="card-img">
                    <img src="print4.jpg" alt="Printers">
                </div>
                <div class="card-info">
                    <h2 class="card-name">HP Laser 107w </h2>
                    <p class="card-role">6,190</p>
                    <p class="card-email">Wireless Printer </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

             <!-- Card 4 -->
            <div class="card">
                <div class="card-img">
                    <img src="print5.jpg" alt="Printers">
                </div>
                <div class="card-info">
                    <h2 class="card-name">HP 107a Laser Printer </h2>
                    <p class="card-role">5,590</p>
                    <br>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

               <!-- Card 5 -->
            <div class="card">
                <div class="card-img">
                    <img src="print6.jpg" alt="Printers">
                </div>
                <div class="card-info">
                    <h2 class="card-name">HP Laser MFP 135a Printer</h2>
                    <p class="card-role">7,590</p>
                    <p class="card-email">Print, Copy, Scan </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>
         
           
            </section>
            
            
            </body>
            
            </html>