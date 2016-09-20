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
	
			<!- <img id="logo" src="images/logo.png" /> -->
			
			<!--<img id="banner" src="images/banner_ad.png" />	-->
		</div>
		
		<!--Header end here-->
		
		<!--Nevigation bar start-->
		
		<div class="menubar">
		
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
				
			</ul>
			
			
			<!-- Search Box -->
			<div id="form">
				<form method="get" action="result.php" enctype="multopart/form-data">
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
				
	<?php
	if(isset($_GET['pro_id'])){
		
	$product_id = $_GET['pro_id'];
					
	$get_pro ="select * from products where product_id='$product_id'";
	 
	$run_pro = mysqli_query($con,$get_pro);
	 
	 
	while($row_pro=mysqli_fetch_array($run_pro)){
		 
			$pro_id = $row_pro['product_id'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			$pro_desc = $row_pro['product_desc'];
		 
		 echo "
		 
				<div id ='single_product'>
				
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='400' height='300'/>
					
					<p><b>$ $pro_price</b></p>
					<p>$pro_desc</p>
					
					<a href ='index.php' style='float:left;'>Go Back</a>
					
					<ahref='index.php ?pro_id=$pro_id' ><button style='float:right'>Add to Cart</button></a>
					
					
					
					
				
				
				</div>
		 
		 
		 ";	 
		 
	 }
	}
	 
?>
				
			
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
		