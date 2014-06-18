<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Code a Responsive Website with Twitter Bootstrap 3</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		<title>My website</title>
	</head>
	<body>
	
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="/"><img src="images/logo.png" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="chinese.php">Chinese Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="thai.php">Thai Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="european.php">European Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="healthy.php">Healthy Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="kids.php">Kids Corner</a>
									</li>
									<li class="divider"></li>
									<li>
									<a href="drinks.php">Soft Drinks</a>
									</li>
								</ul><!-- end dropdown-menu -->
							</li>
						<li class="active">
								<a href="location.php">Location</a>
							</li>
								<li class="active">
								<a href="offers.php">Offers</a>
							</li>
								<li class="active">
								<a href="aboutus.php">About Us</a>
							</li>
								<li class="active">
								<a href="contactus.php">Contact us</a>
							</li>
							
						</ul>
						
						<form class="navbar-form pull-left">
							<input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form -->
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="reg.php" ><span class="glyphicon glyphicon-user"></span> Sign out </a>
							</li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			
			<div id="chinesenav">
	                 <ul class="bbb"><li>
	                     <a class="ch" href="#CH01">Starter</a>
                         <a class="ch" href="#CH02">SOUP</a>
		                  <a class="ch" href="#CH04">MAIN COURSES</a>
		                 <a class="ch" href="#CH05">Thai SET DINNER</a></li>
	                 </ul>
	  	         </div>
			<div id="blocke4chinese"> <p class="sansserif">
	                 <h1 id="CH01"style="color:red">Thai CORNER</h1><br>
                     <h2 style="color:orange">Starter</h2><br>
Shrimp Crackers ............................................ 2.20<br>
Thai Vegetable Spring Roll(with Thai Sauce)................. 3.35<br>
Thai Vegetable Samosa (6pcs) ............................... 4.00<br>
Crab Claw .................................................. 3.50<br>
Thai Fish Cake (6pcs with Thai Sauce) ...................... 4.60<br>
Ka Tao Butterfly Prawn (6pcs with Thai Sauce) .............. 4.60<br>
Thai Meat Song (2 person) (6pcs & crispy lettuce garnish) .. 8.80  <br>

<br><hr id="CH02"><br><br><br>

<h2 style="color:orange">SOUP</h2><br>
Tom Yum Prawn Soup (clear) ................................. 3.50<br>
Tom Yum Chicken Soup (clear) ............................... 3.50<br>
Tom Yum Vegetable Soup (clear) ............................. 3.50<br>
<hr id="CH04"><br><br><br>




<h1 style="color:orange">MAIN COURSES</h1><br>

<em>with onion,pepper,bamboo shoots,water chestnut,<br>
string beans in coconut milk and curry base.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Thai Green Curry </h3><br>
<em>with onion,pepper,bamboo shoots,water chestnut,<br>
string beans in spicy coconut milk and curry base.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>

<h3>Thai Yellow Curry </h3><br>
<em>with onion,pepper,pineapple in coconut milk and curry base.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>

<h3>Matsaman Curry </h3><br>
<em>with onion,pepper,pineapple in coconut milk and curry base.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Tamarind and Cashew Nuts Stir Fried</h3><br>
<hr id="CH05"><br><br><br>
<h1 style="color:orange">Thai SET DINNER</h1><br>

<h3>Thai Dish for Two  ..................................... 26.00</h3><br>
<em>Thai Vegetable Spring Roll or Thai Fish Cake<br>
Tom Yum Vegetable Soup or Tom Yum Chicken Soup<br>
Fillet Chicken in Thai Green Curry<br>
Roast Duck in Tamarind and Cashew Nut Stir Fried<br>
Steamed Rice<br>
Thai Shrimp Cracker<br>
2 x Cake</em><br>

<h3>Thai Dish for Three .................................... 26.00</h3><br>
<em>Thai Vegetable Spring Roll or Thai Fish Cake<br>
Tom Yum Vegetable Soup or Tom Yum Chicken Soup<br>
Fillet Chicken in Thai Green Curry<br>
Roast Duck in Tamarind and Cashew Nut Stir Fried<br>
Beef in Black Pepper and Garlic Stir Fried<br>
Steamed Rice<br>
Thai Shrimp Cracker<br>
3 x Cake</em><br>

			</div>
	
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<h5>Copyright &copy; 2014 {Manjit Singh}</h5>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-4">
						<h4>Address</h4>
						<h6>FlamingWok 24 Fairview Strand Fairview Dublin 3 Ph. No.01-8178924. email:info@flamimgwok.ie</h6>
					</div><!-- end col-sm-4 -->
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Location</a></li>
							<li><a href="#">Offers</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6>Follow Us</h6>
						<ul class="unstyled">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google Plus</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6>Coded with <span class="glyphicon glyphicon-heart"></span> by Manjit Singh</h6>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>

