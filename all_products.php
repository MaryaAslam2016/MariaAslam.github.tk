<!DOCTYPE>
<?php 

include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/logo.png" /> </a>
			<img id="banner" src="images/banner_ad.png" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			
		
			<div id="content_area">
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
	<?php 
	$get_pro = "select * from products";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> $ $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";
	
	}
	?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		<!--sidebar start here-->
		
			<div id="sidebar" >
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
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2014 by Maria Aslam</h2>
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>