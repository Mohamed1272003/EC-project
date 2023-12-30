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
    <title> Apple </title>
	<head>  
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Mac.css">
 
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
                <p>MacBook with best price all over Egypt</p>
            
            </div>
        </div>
    </section>
   <section class="team">
        
        <div class="team-cards">
            <!-- Cards here -->
            <!-- Card 1 -->
            <div class="card">
                <div class="card-img">
                    <img src="Mac1.jpg" alt="macbook">
                </div>
                <div class="card-info">
                    <h2 class="card-name">MacBook Pro,16-Inch, M1pro </h2>
                    <p class="card-role">91,000 </p>
                    <p class="card-email">10-Core CPU And 16 Core GPU 512GB </p>
                    <p><button class="button">Buy</button></p>
                      </a>
                </div>
            </div>
<br><br><br>

           <!-- Card 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="Mac2.jpg" alt="macbook">
                </div>
                <div class="card-info">
                    <h2 class="card-name"> MacBook Pro,14-Inch, M1pro   </h2>
                    <p class="card-role">90,000 </p>
                    <p class="card-email">10-Core CPU And 16 Core GPU 1TB </p>
                    <p><button class="button">Buy</button></p>
                      </a>
                </div>
            </div>
<br><br><br>

     <!-- Card 3 -->
            <div class="card">
                <div class="card-img">
                    <img src="Mac3.jpg" alt="macbook">
                </div>
                <div class="card-info">
                    <h2 class="card-name"> MacBook Air M1 13In.  </h2>
                    <p class="card-role">46,500 </p>
                    <p class="card-email">8G-Ram 256G-SSD </p>
                    <p><button class="button">Buy</button></p>
                      </a>
                </div>
            </div>
<br><br><br>

          <!-- Card 4 -->
            <div class="card">
                <div class="card-img">
                    <img src="Mac4.jpg" alt="macbook">
                </div>
                <div class="card-info">
                    <h2 class="card-name"> MacBook Air 15-inch  </h2>
                    <p class="card-role"> 70,000</p>
                    <p class="card-email">M2 Chip 256GB SSD </p>
                    <p><button class="button">Buy</button></p>
                      </a>
                </div>
            </div>
<br><br><br>

     <!-- Card 5 -->
            <div class="card">
                <div class="card-img">
                    <img src="Mac5.jpg" alt="macbook">
                </div>
                <div class="card-info">
                    <h2 class="card-name"> Apple MacBook Pro 16-inch  </h2>
                    <p class="card-role"> 105,000</p>
                    <p class="card-email">16GB M2 Pro with 12 core CPU, 19core GPU </p>
                    <p><button class="button">Buy</button></p>
                      </a>
                </div>
            </div>
<br><br><br>
</section>


</body>

</html>