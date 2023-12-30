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
    <title> Home Page </title>
	<head>  
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style2.css">
 
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
            <div class="about-img">
                <img src="Ecabout.jpg" alt="Geeksforgeeks">
            </div>
            <div>
                <p>All you need in one place witn Best price all over Egypt </p>
                
            </div>
        </div>
    </section>


<section class="team">
        
        <div class="team-cards">
            <!-- Cards here -->
            <!-- Card 1 -->
            <div class="card">
                <div class="card-img">
                    <img src="homecard1.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone  </h2>
                    <p class="card-role"></p>
                    <p class="card-email"> </p>
                    <br><br>
                    <p> <a href="apple.php">
                        <button class="button">Shop</button></a></p>
                      </a>
                </div>
            </div>
<br><br><br>
            <!-- Card 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="homemac.jpg" alt="Macbook">
                </div>
                <div class="card-info">
                    <h2 class="card-name">MacBook</h2>
                    <br><br>
                    <p><a href="mac.php"><button class="button">Shop</button></a></p>
                      </a>
                </div>
            </div>
<br><br><br>
            <!-- Card 3 -->
            <div class="card">
                <div class="card-img">
                    <img src="print.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Printers </h2>
                    <br><br>
                    <p><a href="print.php"><button class="button">Shop</button></a></p>
                      </a>
                </div>
            </div>
 <br><br><br>
                    
            

                    <!-- Card 7 -->
              <div class="card">
                <div class="card-img">
                    <img src="PS5.jpg" alt="ps">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Playstation 5 </h2>
                   <br><br>
                    <p><a href="ps.php"><button class="button">Shop</button> </a></p>
                      </a>
                </div>
            </div>
            <br><br><br>

                    <!-- Card 8 -->
              <div class="card">
                <div class="card-img">
                    <img src="Bag1.jpg" alt="Bag">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Bag </h2>
                    <br><br>
                    <p><a href="Bag.php"><button class="button">Shop</button></p>
                      </a>
                </div>
            </div>
            <br><br><br>

    </section>

</body>

</html>