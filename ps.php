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
<title> playstation 5 </title>

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
                <p>playstation 5 with best price all over Egypt</p>

            </div>
        </div>
    </section>
    <section class="team">

        <div class="team-cards">
            <!-- Cards here -->
            <!-- Card 1 -->
            <div class="card">
                <div class="card-img">
                    <img src="ps5.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Sony playstation 5 console with wireless controller </h2>
                    <p class="card-role">26,200</p>
                    <p class="card-email">white and black </p>
                    <p><button class="button">Shop</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

            <!-- Card 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="ps2.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">PlayStation 5 </h2>
                    <p class="card-role">32,500</p>
                    <p class="card-email">Digital Edition Console </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

            <!-- Card 3 -->
            <div class="card">
                <div class="card-img">
                    <img src="ps3.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Sony DualSense wireless controller </h2>
                    <p class="card-role">3,190</p>
                    <p class="card-email">White </p>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

             <!-- Card 4 -->
            <div class="card">
                <div class="card-img">
                    <img src="ps4.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">PS5 Digital Batman Skin </h2>
                    <p class="card-role">790</p>
                    <br>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

             <!-- Card 5  -->
            <div class="card">
                <div class="card-img">
                    <img src="ps8.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">PS5 Digital Assassin's Creed  Skin </h2>
                    <p class="card-role">790</p>
                    <br>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>


               <!-- Card 6 -->
            <div class="card">
                <div class="card-img">
                    <img src="ps6.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">PS5 Controller Charger Station</h2>
                    <p class="card-role">280</p>
                    <br>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

                        <!-- Card 7 -->
            <div class="card">
                <div class="card-img">
                    <img src="ps7.jpg" alt="playstation 5">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Steelseries arctis 3 wired gaming headset</h2>
                    <p class="card-role">1800</p>
                    <br>
                    <p><button class="button">Buy</button></p>
                    </a>
                </div>
            </div>
            <br><br><br>

           
            </section>
            
            
            </body>
            
            </html>