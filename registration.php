
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
					<a class="navbar-brand" href="/"><img src="images/afghanlogo.png" style="margin-left:-95px" alt="Taste of kabul"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
								<ul style="margin-top:7px"class="nav navbar-nav">
						
							
						
					<h3><font color="white"> Welcome to TasteOfKabul</font></h3>
					</div><!-- end nav-collapse -->


				</div><!-- end container -->
			</div><!-- end navbar -->
			
			<br>
			<br>
			
			
			<br>
			<br>
			<br>
			<br>
			<br>
		
			
						
			
				      

		
		
			
		<div class="row" id="features">
				<div class="col-sm-6 feature">
						<div style="background-color:black;"class="panel">
							<div style="background-color:orange;"class="panel-heading">
							<h3 class="panel-title">Sign-In Here</h3>
							</div><!-- end panel-heading -->
						 <div class="carousel-inner">
					<div class="item active">						
						<div id="post3">
<form  action="registration.php" method="post">
<table class="carousel-inner" bgcolor="black"  style="align:left" width="450" align="left">
  <tr></tr>
  <tr></tr>
  <tr>
        <td  bgcolor="black">&nbsp; &nbsp; &nbsp;<font color="white"> Username</font><br><input style=margin-left:20px; name="user_name" type="text" id="u_name" v>&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="black">&nbsp; &nbsp; &nbsp; <font color="white">Password</font><br><input style=margin-left:20px; type="password" name="password" id="u_pass"></td>
	
	
</tr><tr>

    <td colspan="4">&nbsp; &nbsp; &nbsp;  &nbsp;   <br><input  name="login" type="submit" id="login"  value="Log In"></td>
    </tr>
</table>


</form>
						</div>
						</div><!-- end panel -->
				</div><!-- end feature -->
						</div><!-- end panel -->
				</div><!-- end feature -->

<?php 
include("includes/connect.php");
if(isset($_POST['login'])){
$u_name = mysql_real_escape_string($_POST['user_name']);
$u_pass = mysql_real_escape_string($_POST['password']);
$encrypt = md5($u_pass);

$admin_query = "select * from sub_scribe  where user_name='$u_name' AND password = '$u_pass'";

$run = mysql_query($admin_query);
if(mysql_num_rows($run)>0){
$_SESSION['u_name']=$u_name;

echo "<script>window.open('home.php' , '_self')</script>";
}
else {

echo "<script>alert ('user name or password is incorrect')</script>";
}
}

?>

	
				
<div class="col-sm-6 feature">
					<div style="background-color:black;"class="panel">
						<div style="background-color:orange;" class="panel-heading">
							<h3 class="panel-title">Sign-up Here Free</h3>
						</div><!-- end panel-heading -->
						<div class="carousel-inner">
					<div class="item active">
									<div id="post2">
									
									
 <form action="registration.php" method="post">
  <table class="carousel-inner" bgcolor="black"  style="align:left" width="450" align="left"><caption style="color:Blue"><h4>Register Here</h4></caption>


  <tr>
        <th  bgcolor="black"><h5 style="color:yellow"><font color="white">Sign-up is free</font></h5></th>
  <tr>
        <td  bgcolor="black">&nbsp; &nbsp; &nbsp; <font color="white">Name</font><br><input  name="name" type="text" id="name" v>&nbsp;</td>
  </tr>
   <tr>
    
    <td bgcolor="black">&nbsp; &nbsp; &nbsp;<font color="white">Email</font><br><input  type="text" name="email" id="email"></td>
  </tr>
    <tr>
        <td  bgcolor="black">&nbsp; &nbsp; &nbsp; <font color="white">Username</font><br><input  name="user_name" type="text" id="user_name" >&nbsp;</td>
  </tr>
  <tr>
   
    <td bgcolor="black">&nbsp; &nbsp; &nbsp; <font color="white">Password</font><br><input  type="password" name="password" id="password"></td>
  </tr>
 
  <tr bgcolor="#87E3C7" style="text-align: left">
    <td colspan="2" bgcolor="black">&nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; <input name="submit" type="submit" id="submit" value="Subscribe Now"></td>
    </tr>
</table>


</form>
									
									</div>
									
			   
				</div><!-- end feature -->
				
			
				</div><!-- end feature -->
				</div><!-- end feature -->
		</div><!-- end feature -->				
			
			
		</div><!-- end panel -->
				</div><!-- end feature -->
						</div><!-- end panel -->
				</div><!-- end feature -->
				
			
<?php

$con=mysql_connect("localhost","root","198017rms") or die (mysql_error());
$db=mysql_select_db("rudraveer",$con) or die (mysql_error());

if (isset($_POST['submit']))
{
	
$name=$_POST['name'];	
$email=$_POST['email'];	
$uname=$_POST['user_name'];	
$pass=$_POST['password'];




	if ($name ==''){
	echo "<script>alert ('Please enter your name')</script>";
	exit();
	}
		if ($email==''){
	echo "<script>alert ('Please enter your email')</script>";
	exit();
	}
	
	if ($uname ==''){
	echo "<script>alert ('Please enter your name')</script>";
	exit();
	}
	if ($pass==''){
	echo "<script>alert ('Please enter a password')</script>";
	exit();
	}

	
	
else{

	$que= "insert into sub_scribe(name,email,user_name,password) values ('$name','$email','$uname','$pass')";
	
	if(mysql_query($que)){
		echo "<script>alert ('Registration Successfull')</script>";
		echo "<script> window.open('home.php','_self')</script>";
		
	}
}	
}

?>





	
				
						
	<br>
	<br><br><br>		
						
	<br>

			
	
			
		
	
			
			
			
		
	

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



