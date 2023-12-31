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
            <div>
                <p>iphone with best price all over Egypt</p>
            
            </div>
        </div>
    </section>
   <section class="team">       
        <div class="team-cards">

            <!-- Cards here -->
            <!-- Card 1 -->
             <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="1">
            <div class="card">
                <div class="card-img">
                    <img src="iphone15.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 15 pro </h2>

                    <p class="card-role">66,000</p>
                <br>
                    
                            <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form> 
                      
                </div>
            </div>
<br><br><br>
            <!-- Card 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="iphone14.jpg" alt="iphone">
                </div>
                 <div class="card-info">
                    <h2 class="card-name">iphone 14 plus</h2>
                    <p class="card-role">45,333</p>
                    <p class="card-email">(128GB)+6Ram </p>
                         <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="3"> 
                            <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                            </button> 
                        </form>  
                </div>
            </div>
<br><br><br>
            <!-- Card 3 -->
             <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="2"> 
            <div class="card">
                <div class="card-img">
                    <img src="iphone142.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 14 plus</h2>
                    <p class="card-role">45,333</p>
                    <p class="card-email">(128GB)+6Ram </p>
                     <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form>


                </div>
            </div>
 <br><br><br>
                        <!-- Card 4 -->
                        <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="2"> 
            <div class="card">
                <div class="card-img">
                    <img src="iphone13.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 13 </h2>
                    <p class="card-role">33,666</p>
                    <p class="card-email">(128GB)+4Ram </p>
                     <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form> 
                      
                </div>
            </div>
            <br><br><br>
            <!-- Card 5 -->
            <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="2"> 
            <div class="card">
                <div class="card-img">
                    <img src="iphone12.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 12 </h2>
                    <p class="card-role">30,000</p>
                    <p class="card-email">(128GB)+4Ram </p>
                   <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form> 
                      
                </div>
            </div>
            <br><br><br>
                    <!-- Card 6 -->
                    <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   
                                     id="product3_quantity" 
                                   name="product_quantity" 
                                   value="30" > 
                                   
              <div class="card">
                <div class="card-img">
                    <img src="iphone152.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 15 </h2>
                    <p class="card-role">50,666</p>
                    <p class="card-email">(256GB)+6Ram </p>
                   <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form> 
                    
                </div>
            </div>
            <br><br><br>

                    <!-- Card 7 -->
                    <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="2"> 
              <div class="card">
                <div class="card-img">
                    <img src="iphone11.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 11 </h2>
                    <p class="card-role">27,000</p>
                    <p class="card-email">(128GB)+4Ram </p>
                     <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form> 
                      
                </div>
            </div>
            <br><br><br>

                    <!-- Card 8 -->
                    <form method="post" action="cart.php"> 
                            <input type="hidden" 
                                   name="product_id" 
                                   value="2"> 
              <div class="card">
                <div class="card-img">
                    <img src="iphone112.jpg" alt="iphone">
                </div>
                <div class="card-info">
                    <h2 class="card-name">iphone 11 </h2>
                    <p class="card-role">29,666</p>
                    <p class="card-email">(256GB)+4Ram </p>
                     <button type="submit" 
                                    name="add_to_cart"> 
                                Add to Cart 
                           </button> 
                        </form> 
                    
                </div>
            </div>
            <br><br><br>

    </section>

    
</body>

</html>