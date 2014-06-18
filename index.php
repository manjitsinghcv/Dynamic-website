
<!DOCTYPE html>

<html >
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
	<body  style="background-color:#5F7E9F;">
	
		<div  style="background-color:#5F7E9F;" class="container" id="main">
		
			<div style="background-color:black;" class="navbar navbar-fixed-top">
				<div style="background-color:black;"class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img src="images/afghanlogo.png" style="margin-top:-5px" alt="Taste of kabul"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
								<ul style="margin-top:7px"class="nav navbar-nav">
							<li  class="active">
								<a href="#">Home</a>
							</li>
							</li>
								<li class="active">
								<a href="menu.php">Menu</a>
							</li>
							</li>
								<li class="active">
								<a href="reservation.php">Reservations</a>
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
							
						
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
										<a href="registration.php" ><span class="glyphicon glyphicon-user"></span> Sign In </a>
							</li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->


				</div><!-- end container -->
			</div><!-- end navbar -->
			
			<br>
			<br>
			
			
			
						<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab"> </a></li>
							
						</ul>
						
			
				      

			
			<div class="carousel slide" id="myCarousel">
		
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" id="slide1">
					<image src="http://mayabugs.com/blog/wp-content/uploads/2012/06/Indian-Chinese-Noodles.jpg">
						<div class="carousel-caption">
						
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide2">
					<image src="http://www.skyhdwallpapers.com/wp-content/uploads/2012/12/background-lobster.jpg">
						<div class="carousel-caption">
							
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide3">
					<image src="http://www.wallpapersshop.net/wallpapers/2012/12/Chinese-Cuisine-Table-Laying-720x1280.jpg">
						<div class="carousel-caption">
						
								</div><!-- end carousel-caption-->
					</div><!-- end item -->
				</div><!-- carousel-inner -->
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div><!-- end myCarousel -->
			
			
			<div class="row" id="bigCallout">
				<div class="col-12">
					
					<div class="alert alert-success alert-block fade in" id="successAlert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						
					</div><!-- end alert -->
					
					<!-- Visible only on small devices -->
					<div class="well well-small visible-sm">
						<a href="" class="btn btn-large btn-block btn-default"><span class="glyphicon glyphicon-phone"></span> Give us a call!</a>
					</div><!-- end well-small -->
					
					<div  style="background-color:black;"class="well">
						<div class="page-header">
							<h5><font color="white">Hello Dublin </font></h5>
							
						</div><!-- end page-header -->
						
						<p class="lead"><font color="white"> You are welcome on Tasteofkabul.com Let me introduce
			  Taste of Kabul.It is located up in Kimmage part of south Dublin. This is an Afghan restaurant 
		But not an expansive one. Our foods have never been introduced in ireland, so we chose Kimmage as a right location to give you a taste of our 
		cuisine.<br>
		We are 100% sure that if you try our food once you will be one of our regulars. So why don't you drop into us and have a taste of Kabul. You will not 
		leave us disappointed!!!<br>
		We can accommodate 70 people in our main saloon and 30 people in our funtion room. As such we can accommodate your birthday parties, private dinning,
		invitations and so on.
		<br>
			  </font>
			  </p>
						

					</div><!-- end well -->
					
				</div><!-- end col-12 -->
			</div><!-- end bigCallout -->
			
		
			
		<div class="row" id="features">
				<div class="col-sm-4 feature">
					<div style="background-color:black;"class="panel">
						<div style="background-color:orange;"class="panel-heading">
							<h3 class="panel-title">Direction To Restaurant</h3>
						</div><!-- end panel-heading -->
						<div class="carousel-inner">
					<div class="item active">
<span class="glyphicon glyphicon-map-marker"></span><small> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2380.9114833606604!2d-6.23886395!3d53.36273905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e5e9fbce7b1%3A0x214f406925031157!2s24+Fairview+Strand!5e0!3m2!1sen!2s!4v1395224302164" width="515" height="295" frameborder="0" style="border:0"></iframe>
								</div></div>
								</small>						




						</div><!-- end panel -->
				</div><!-- end feature -->
				
<div class="col-sm-4 feature">
					<div style="background-color:black;"class="panel">
						<div style="background-color:orange;" class="panel-heading">
							<h3 class="panel-title">Customers Review</h3>
						</div><!-- end panel-heading -->
						<div class="carousel-inner">
					<div class="item active">
									<div id="post"><?php include("includes/sidebar.php"); ?></div>
										
								
								
								
								
								
								
			    </div></div>
				</div><!-- end feature -->
				
				
			</div><!-- end features2 -->
				<div class="col-sm-4 feature">
					<div style="background-color:black;" class="panel">
						<div style="background-color:orange;" class="panel-heading">
							<h3 class="panel-title">Table Reservations</h3>
						</div><!-- end panel-heading -->
						<div class="carousel-inner">
					<div class="item active"><img src="images/table.jpg"  height="300px" alt="HTML5" class="img-circle"></div></div>
						
						<p><font color="white">Book online and avail special discount</font></p>

						
						
						<a href="#myModal20" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Reservations</a>
								
								<div class="modal fade" id="myModal20">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Book Online </h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
															
			
<form method="post" action="home.php" enctype="multipart/form-data">
<table align="center" border="10" style="margin-top:50px" >


<tr>
<td align="center" background="images/110.jpg width='500' " colspan="6"><h5>Reserve The Table Online</h5></td>

</tr>


				      
<tr>
<td align="left" width="60"><h5 style="color:blue";>Date:</h5></td>
            <td width="100">
              <input name="abcdate" type="date"  value="<?php if(isset($_POST['abcdate'])){ echo $_POST['abcdate']; }?>" /></td>
         
</tr>

<tr>
<td align="left"><h5 style="color:blue";>Time:</h5></td>
            <td width="100">
              <input name="abctime" type="time"  value="<?php if(isset($_POST['abctime'])){ echo $_POST['abctime']; }?>" /></td>
         
</tr>


<tr>
<td align="left"><h5 style="color:blue";>Name:</h5></td>
<td><input type="text" name="name" size="12"></td>
</tr>

<tr>
<td align="left"><h5 style="color:blue";>Email:</h5></td>
<td><input type="email" name="email" size="12"></td>
</tr>

<tr>
<td align="left"><h5 style="color:blue";>Phone Number:</h5></td>
<td><input type="number" name="phone" size="12"></td>

</tr>
 <tr>
  <td align="left"><h5 style="color:blue";>People:</h5></td>      
<td>
		

				       <p style="color:red";>     
				             <input type="radio" name="tab22" value="1person" />
				           1person		
				             <input type="radio"  name="tab22" value="2people" />
				          2people
				             <input type="radio"  name="tab22" value="3people" />
							3people
				             <input type="radio"  name="tab22" value="4people" />4people
   <input type="radio"  name="tab22" value="5people" />5people
      <input type="radio"  name="tab22" value="6people" />6people</td></tr></p>
<tr></tr>
<tr></tr>
<tr></tr>
<td align="center" colspan="6"><input type="submit" name="submit" value="Book Online"></td>
</tr>
</table>
</form>

<?php

include("includes/connect.php");

if(isset($_POST['submit']))
{
	 
	$abcdate = $_POST['abcdate'];
		$abctime = $_POST['abctime'];
	 $name = $_POST['name'];
	$email = $_POST['email'];
	 $abcnumber = $_POST['phone'];
	

	if($abcdate =='' or
	$abctime =='' or $name =='' or  	$email =='' or  $abcnumber  =='' )
	{
	echo "<script>alert('any of the field id empty')</script>";
	exit();
	}
	else{
	

	
	$insert_query = "insert into booking (abcdate,abctime,name,email,phone,tab22)  values ( 
	'$abcdate','$abctime','$name','$email','$abcnumber','".$_POST['tab22']."')";
	if(mysql_query($insert_query)){
	echo "<script>alert('Thanks for booking with us')</script>";

	echo "<script>window.open('home.php','_self')</script>";
	}
}
}
?>



											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
							
					
					</div><!-- end panel -->
				</div><!-- end feature -->
			
			
			
			<div><!--last-->
			
			
	
			
			
			<div class="row" id="moreInfo">
			
				<div class="col-sm-12">
				<h2 style="color:red;">Menu</h2>
			</div></div>
			<div class="row" id="moreInfo">
			
				<div class="col-sm-2">
				
					
								
							
								
								
								<a href="#myModal3" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>CHINESE Corner</a>
								
								<div class="modal fade" id="myModal3">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Pure Chinese</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">	
	                 <ul class="bbb"><li>
	                     <a class="ch" href="#CH01">APPETISER</a>
                         <a class="ch" href="#CH02">SOUP</a>
		                 <a class="ch" href="#CH03">SIDE ORDER</a>
		                 <a class="ch" href="#CH04">MAIN COURSES</a>
		                 <a class="ch" href="#CH05">CHINESE SET DINNER</a></li>
	                 </ul>
	  	    
											


                     <h2 style="color:orange">APPETISER</h2><br>
Joy Bo Po (2 person) ............................................ 10.00<br>
Half portion Duck with Pancake and Hoi Sin sauce ................ 15.00<br>
Quarter portion Duck with Pancake and Hoi Sin Sauce .............  8.00<br>

Chicken Wings ...................................................  4.50<br>

Spare Ribs ......................................................  5.50<br>

Crispy Spring Roll ..............................................  3.50<br>
<em>2pcs with Sweet & Sour Sauce.</em><br>

Mixed Vegetable Roll ............................................  3.50<br>
<em>6pcs with Sweet & Sour Sauce.</em><br>

Crispy Duck Roll (2pcs) .........................................  3.50<br>



Onion Rings (8pcs) ..............................................  3.50<br>

Tofu Skewers (3pcs) .............................................  4.00<br>
<em>Choice of Satay,BBQ or Sweet & Sour Sauce.</em><br><hr id="CH02"><br>

<h2 style="color:orange">SOUP</h2><br>
Won Ton Soup (clear) ............................................  3.50<br>
Hot & Sour Soup (thick) .........................................  3.50<br>
Vegetarian Hot & Sour Soup (thick) ..............................  3.50<br>
Chicken & Sweetcorn Soup (thick) ................................  3.50<br>
Chicken & Mushroom Soup (clear) .................................  3.50<br>
Chicken & Noodle Soup (clear) ...................................  3.50<br>
<hr id="CH03"><br><br><br>
<h2 style="color:orange">SIDE ORDER</h2><br>


Prawn Cracker ...................................................  1.80<br>
Chips ...........................................................  1.80<br>
Boiled Rice .....................................................  2.00<br>
Fried Rice ......................................................  2.20<br>
Fried Soft Noodle ...............................................  3.80<br>
Stir Fried Mixed Vegetable ......................................  3.80<br>
Bamboo Shoots and Water Chestnut ................................  3.00<br>
Stir Fried Beansprouts ..........................................  2.80<br>
Stir Fried Onions ...............................................  2.80<br>

Tray Sauce (Curry or Sweet & Sour) ..............................  2.50<br>
Sauce ...........................................................  2.50<br>
<em>Any Satay,Peking,Black Bean,Lemon,Plum,Black Pepper,
Szechuan,Hot Garlic.</em><br>

Salt & Chilli Chips (Small) .....................................  2.50<br>
Salt & Chilli Chips (Large) .....................................  3.50<br>
Salt & Chilli Tofu (Small) ......................................  3.50<br>
Salt & Chilli Tofu (Large) ......................................  4.50<br>
2 in 1 (Curry & Chips) ..........................................  2.50<br>
2 in 1 (Curry & Chips.Long Tray) ................................  3.50<br>
3 in 1 (Curry,Chips & Fried Rice.Long Tray) .....................  4.00<br>
4 in 1 (Chicken or Beef, Fried Rice,Curry & Chips) ..............  5.00<br>
<hr id="CH04"><br><br><br>

<h1 style="color:orange">MAIN COURSES</h1><br>

Roast Duck Su Chow ..............................................  9.50<br>
Roast Duck with Beansprout ......................................  8.20<br>
Roast Duck Cantonese Style ......................................  8.20<br>
Roast Duck With Plum Sauce ......................................  8.20<br>
Roast Duck With Orange Sauce ....................................  8.20<br>
Roast Duck With Lemon Sauce .....................................  8.20<br>
Roast Duck With Pineapple .......................................  8.20<br>


Fillet Chicken With Lemon Sauce .................................  7.00<br>
Fillet Chicken With Orange Sauce ................................  7.00<br>
Fillet Chicken With Pineapple ...................................  7.00<br>




<em>Onion with garlic blended in a fresh tomato and hot bean sauce.</em><br>
House Special (Mixed Meat) ......................................  8.00<br>
King Prawn ......................................................  8.00<br>
Roast Duck ......................................................  8.20<br>
Fillet Chicken ..................................................  6.80<br>
Beef ............................................................  6.80<br>
Pork ............................................................  6.80<br>
Vegetable .......................................................  6.30<br>
Tofu ............................................................  6.80<br>


<em>Onion,carrot,peas,bamboo shoots,water chestnuts,cashew nuts, in 
yellow and hot bean sauce.</em><br>
House Special (Mixed Meat) ......................................  8.00<br>
King Prawn ......................................................  8.00<br>
Roast Duck ......................................................  8.20<br>
Fillet Chicken ..................................................  6.80<br>
Shredded Chicken ................................................  7.00<br>
Beef ............................................................  6.80<br>
Pork ............................................................  6.80<br>
Vegetable .......................................................  6.30<br>
Tofu ............................................................  6.80<br>





<em>Onion,spring onion,ginger in oyster sauce.</em><br>
House Special (Mixed Meat) ......................................  8.00<br>
King Prawn ......................................................  8.00<br>
Roast Duck ......................................................  8.20<br>
Fillet Chicken ..................................................  6.80<br>


<hr id="CH05"><br><br><br>
<h1 style="color:orange">CHINESE SET DINNER</h1><br>

<h2>Dinner For 2 .................................................. 22.00</h2>

Chicken & Sweet Corn Soup or Spring Rolls<br>
Chicken Satay Skewers or BBQ Ribs<br>
Chicken or Beef Curry<br>
Roast Duck Cantonese Style<br>
Young Chow Fried Rice<br>
Prawn Cracker<br>
2 X Coke<br>

<h2>Dinner For 2 .................................................. 32.00</h2>

<p>Chicken & Sweet Corn Soup or Spring Rolls<br>
Chicken Satay Skewers or BBQ Ribs<br>
King Prawn with Broccoli<br>
Chicken or Beef Curry<br>
Roast Duck Cantonese Style<br>
Young Chow Fried Rice<br>
Prawn Cracker<br>
3 X Coke</p>

			
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
						
							
								</div>
									<div class="col-sm-2">
								
								<a href="#myModal4" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Thai Corner</a>
								
								<div class="modal fade" id="myModal4">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Pure Thai</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h1 style="color:red">Thai CORNER</h1><br><br>

	
		
	            <ul class="bbb"><li>
	                 <a class="ch" href="#xxx0">STARTERS</a>
		             <a class="ch" href="#xxx1">SOUP</a>
		             <a class="ch" href="#xxx2">MAIN COURSE</a>
		             <a class="ch" href="#xxx3">THAI SET MENU</a></li>
		         </ul>
	  	  
	 	    
	                 <h1 style="color:red">THAI CORNER </h1>
	  <hr id="xxx0"><br><br><br>
<h2 style="color:orange" >STARTERS</h2>   
Shrimp Crackers ............................................ 2.20<br>
Thai Vegetable Spring Roll(with Thai Sauce)................. 3.35<br>
Thai Vegetable Samosa (6pcs) ............................... 4.00<br>
Crab Claw .................................................. 3.50<br>
Thai Fish Cake (6pcs with Thai Sauce) ...................... 4.60<br>
Ka Tao Butterfly Prawn (6pcs with Thai Sauce) .............. 4.60<br>
Thai Meat Song (2 person) (6pcs & crispy lettuce garnish) .. 8.80  <br>
<hr id="xxx1"><br><br><br>
<h2 style="color:orange">SOUP</h2><br>
Tom Yum Prawn Soup (clear) ................................. 3.50<br>
Tom Yum Chicken Soup (clear) ............................... 3.50<br>
Tom Yum Vegetable Soup (clear) ............................. 3.50<br>
<hr id="xxx2"><br><br><br>
<h2 style="color:orange">MAIN COURSE</h2><br>
<h3>Thai Red Curry </h3><br>
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
<em>with onion,pepper,bamboo shoots,water chestnut,<br>
spring onion,tamarind and cashew nuts in oyster sauce.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Black Pepper and Garlic Stir Fried</h3><br>
<em>with onion,pepper,bamboo shoots,water chestnut,<br>
spring onion in black pepper and crushed garlic sauce.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Chilli Stir Fried</h3><br>
<em>with onion,pepper,carrot,bamboo shoots,water chestnut,<br>
spring onion in homemade spicy sauce.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Lemongrass Stir Fried</h3><br>
<em>with onion,pepper,carrot,bamboo shoots,water chestnut,<br>
spring onion in lemongrass sauce.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Ginger and Chilli Stir Fried</h3><br>
<em>with onion,pepper,carrot,bamboo shoots,<br>
water chestnut,spring onion in spicy ginger sauce.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<h3>Phad Thai - Complete Dish</h3><br>
<em>Traditional Thai Noodle Dish with assorted vegetables,<br>
egg,tamarind and crushed cashew nuts.</em><br>
House Special (Mixed Meat) ................................. 8.50<br>
King Prawn ................................................. 8.50<br>
Roast Duck ................................................. 8.70<br>
Fillet Chicken ............................................. 7.80<br>
Beef ....................................................... 7.80<br>
Pork ....................................................... 7.80<br>
Vegetable .................................................. 7.70<br>
<hr id="xxx3"><br><br><br>
<h2 style="color:orange">THAI SET MENU</h2><br>
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
												
												
												
												
												
												
												
												
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
						
										</div>
									<div class="col-sm-2">
								
								<a href="#myModal" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Soft Drinks</a>
								
								<div class="modal fade" id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Check Out variety Of Soft Drinks</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												

<h1 style="color:red">SOFT DRINKKS</h1><br>
Grape Juice ..................................... 1.40<br>
Ice Tea ......................................... 1.40<br>
Green Tea ....................................... 1.40<br>
Aloe Juice ...................................... 1.80<br>
Lucozade ........................................ 1.50<br>
Mineral Water ................................... 1.20<br>
Can ............................................. 1.00<br>
(Coke,Diet Coke,7up,Club Orange,Fanta)<br>
Grape Juice ..................................... 2.50<br>
(Coke,Diet Coke,7up,Club Orange,Fanta)<br>
Caprisun Orange ................................. 0.80<br>
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
					</div>
									<div class="col-sm-2">
								
								<a href="#myModal5" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Healthy Corner</a>
								
								<div class="modal fade" id="myModal5">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Less calories</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h1 style="color:red">HEALTHY CORNER</h1><br><br>

Tofu Salad ............................................... 4.50<br>
Sreamed Fillet Chicken with Chilli ....................... 8.50<br>
Steamed Prawn with Crushed Garlic ........................ 8.90<br>
Steamed Prawn with Black Bean ............................ 8.90<br>
Steamed Prawn with Ginger and Spring Onion ............... 8.90<br>
Steamed Scallop with Crushed Garlic ..................... 12.90<br>
Steamed Scallop with Black Bean ......................... 12.90<br>
Steamed Scallop with Ginger ............................. 12.90<br>
Steamed Broccoli with Crushed Garlic ..................... 7.00<br>
Steamed Broccoli with Oyster ............................. 7.00<br>
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
			
								</div>
									<div class="col-sm-2">
								<a href="#myModal1" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>European Corner</a>
								
								<div class="modal fade" id="myModal1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Western Food</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h1 style="color:red">Europen CORNER</h1><br>
  
 
King Prawn Omelette & Chips ............................... 8.00<br>
Roast Breast of Chicken & Chips ........................... 6.80<br>
Chicken Omelette & Chips .................................. 6.80<br>
Ham Omelette & Chips ...................................... 6.80<br>
Mushroom Omelette & Chips ................................. 6.30<br>
Sausage & Chips ........................................... 5.00<br>
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
					
										</div>
									<div class="col-sm-2">
								
								<a href="#myModal2" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Kids Box</a>
								
								<div class="modal fade" id="myModal2">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">For Little champs</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<div class="carousel-inner">
					<div class="item active">
									<div id="post1">						
												<h1 style="color:red">Kids Box</h1><br>

<h2 style="color:orange">KIDS BOX ......................................... 4.00</h2><br>
4 Chicken Nuggets,2 Chicken Wings,Spring Roll,Chips.<br>
Ketchup or Sweet & Sour Sauce.<br>
Caprisum Orange Juice.<br>
											</div><!-- end modal-body -->
											</div></div></div>
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
							
				
				</div><!-- end col-sm-2 -->
				
				
			</div><!-- end moreInfo -->
			
	
			
			
			
		
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
		<script src="includes/js/sss.js"></script>
	</body>
</html>



