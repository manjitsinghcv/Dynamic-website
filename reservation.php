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
				
					<a class="navbar-brand" href="/"><img src="images/afghanlogo.jpg" style="margin-top:-13px" alt="Your Logo"></a>
					
					<div  class="nav-collapse collapse navbar-responsive-collapse">
						<ul style="margin-left:-21px"class="nav navbar-nav">
							<li class="active">
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
							
						</ul>
							<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
										<a href="registration.php" ><span class="glyphicon glyphicon-user"></span> Sign In </a>
					</ul>
				
						
					
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			</div>
<div class="row" >
				<div class="col-sm-12">
				
			
			
<form method="post" action="reservation.php" enctype="multipart/form-data">
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
	
			
	
</div>
				 </div><!-- end col-12 -->


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

	echo "<script>window.open('index.php','_self')</script>";
	}
}
}
?>
