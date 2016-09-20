<!DOCTYPE>
<?php
include("functions/functions.php");


?>


<html>
	<head>
		<title>My online shop</title>
		
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
<body>

	<!-- Main container start here-->

	<div class="main_wrapper">
	
		<!--herder start-->
	
		<div class="header_wrapper">
	
			 <img id="logo" src="images/logo.png" /> 
			
			<img id="banner" src="images/banner_ad.png" />	
		</div>
		
		<!--Header end here-->
		
		<!--Nevigation bar start-->
		
		<div class="menubar">
		
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
				
			</ul>
			
			
			<!-- Search Box -->
			<div id="form">
				<form method="get" action="results.php" enctype="multopart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/>
					<input type="submit" name="search" value="Search" />
				</form>
			
			
			</div>
			
		</div>
		
		
		<!--Nevigation bar ends-->
		
		
		
		<!--Content wrapper start here-->
		<div class="content_wrapper">
		
			
				
			
			<div id="content_area">
			
			<div id="shopping_cart">
				
				<span style="float:right; font-size:18px; padding:5px; line-height:40px;">Welcome Guest!  <b style="color:yellow">Shopping Cart -</b>Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
				</span>
				
				
			</div>
			
				<div id="products_box">
					
				
				
				
				<?php getPro(); ?>
				<?php getCatPro(); ?>
				<?php getBrandPro(); ?>
				
			
			</div>
			
		</div>
		<!--Content wrapper ends here-->
		
		<!--sidebar start here-->
		
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				
					<ul id="cats">
					   <!--this is static work for web comment it
					   
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Computers</a></li>
						<li><a href="#">Mobiles</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">ipads</a></li>
						<li><a href="#">Tablets</a></li>  -->
						
						<!-- write php code for dynamic work -->
						
						<?php getCats(); ?>
						
					</ul>
					
					<div id="sidebar_title">Brands</div>
				
					<ul id="cats">
					    
						<!--this is static work for web comment it
						<li><a href="#">HP</a></li>
						<li><a href="#">Dell</a></li>
						<li><a href="#">Motorala</a></li>
						<li><a href="#">Sony Eracson</a></li>
						<li><a href="#">LG</a></li>
						<li><a href="#">Apple</a></li>  -->
						
						<!-- write php code for dynamic work -->
						
						<?php getBrands(); ?>
				
					</ul>	
			
			</div>
			
			<!--sidebar ends here-->
			
		
		
		
	
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2016 by Maria Aslam </h2>
		
		
		</div>
	
	</div>
	<!-- Main container ends here-->
	



</body>
</html>
		