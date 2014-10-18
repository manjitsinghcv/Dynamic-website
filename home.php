
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
		<script>
		var home = { "login" : "please enter user name and password to leave the comment",
		"comment": "Must fill author and content field"
		};
		
		
		</script>
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
					<a class="navbar-brand" href="/"><img src="images/afghanlogo.png" style="margin-left:-90px" alt="Taste of kabul"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
								<ul style="margin-top:7px"class="nav navbar-nav">
							<li  class="active">
								<a href="home.php">Home</a>
							</li>
							</li>
								<li class="active">
								<a href="menu.php">Menu</a>
							</li>
							
							
							<li class="active">
								<a href="location.php">Location</a>
							</li>
							
								<li class="active">
								<a href="aboutus.php">About Company</a>
							</li>
								<li class="active">
								<a href="contactus.php">Contact us</a>
							</li>
								<li class="active">
								<a href="registration.php">Signup</a>
							</li>
						
						
					
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
<span class="glyphicon glyphicon-map-marker"></span><small>
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2383.283951693592!2d-6.291590999999999!3d53.320268999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c72c56ff7fd%3A0xf1f446a26bcd04b0!2s25+Sundrive+Rd!5e0!3m2!1sen!2sie!4v1398987796325" width="515" height="295" frameborder="0" style="border:0"></iframe>
							

								
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
										<a href="#myModal99" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Click to insert comment</a>
								
								<div class="modal fade" id="myModal99">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>

												<h1 class="modal-title">Comment window</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
											

												
												
												
								 <form method="post" action="home.php" enctype="multipart/form-data">
<table width="65" align="center" border="10">
<tr>
<td align="center"  colspan="4"><h4 style="color:orange">Insert comment Here</h4></td>
</tr>
  <tr>
        <td  bgcolor="#CCCCCC" align="left"> Username<input  name="user_name" type="text" id="u_name" ></td>
  </tr>
   <tr>
    <td bgcolor="#CCCCCC" align="left">Password<br><input  type="password" name="password" id="u_pass"></td>
</tr>

<tr>
<td bgcolor="#CCCCCC" align="left">Post Author:
<input type="text" name="author" ></td>
</tr>

<tr>
<td bgcolor="#CCCCCC" align="left">Post Content:
<textarea name="content"  rows="3" cols="22"></textarea></td>
</tr>

<tr>

<td align="left" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="Publish Now"></td>
</tr>
</table>
</form>
									
	
<?php

include("includes/connect.php");

if(isset($_POST['sub']))
{
	 $u_name = mysql_real_escape_string($_POST['user_name']);
$u_pass = mysql_real_escape_string($_POST['password']);
$encrypt = md5($u_pass);

	if($u_name ==''  or
	$u_pass =='')
	{
	echo "<script>alert(home.login)</script>";
		echo "<script>window.open('home.php','_self')</script>";
	
	}
	else{
$admin_query = "select * from sub_scribe  where user_name='$u_name' AND password = '$u_pass'";

$run = mysql_query($admin_query);
if(mysql_num_rows($run)>0){

	 $post_author = $_POST['author'];
	
	 $post_content = $_POST['content'];
	


	if($post_author ==''  or
	$post_content =='')
	{
	echo "<script>alert(home.comment)</script>";
		echo "<script>window.open('home.php','_self')</script>";
	}
	else{

	
	
	
	$insert_query = "insert into posts (post_author,
	post_content)  values ('$post_author','$post_content')";
	if(mysql_query($insert_query)){
		echo "<script>alert('Post published successfully')</script>";
	echo "<script>window.open('home.php','_self')</script>";
	}
	}
}
else 
{
echo "<script>alert('user name or password is worng')</script>";

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
												
												<h2 style="color:Red" class="modal-title">Resrvations</h2>
											</div><!-- end modal-header -->
											<div class="modal-body">
															
			
<form method="post" action="home.php" enctype="multipart/form-data">
<table align="center" border="10" style="margin-top:50px" >


<tr>
<td align="center" background="images/110.jpg width='500' " colspan="6"><h4 style="color:orange">Reserve The Table Online</h4></td>

</tr>


				      
<tr>
<td align="left" width="60"><h5 style="color:blue";>Booking Date :</h5></td>
            <td width="100">
              <input name="abcdate" type="date"  value="<?php if(isset($_POST['abcdate'])){ echo $_POST['abcdate']; }?>" /></td>
         
</tr>

<tr>
<td align="left"><h5 style="color:blue";>Booking Time:</h5></td>
            <td width="100">
              <input name="abctime" type="time"  value="<?php if(isset($_POST['abctime'])){ echo $_POST['abctime']; }?>" /></td>
         
</tr>


<tr>
<td align="left"><h5 style="color:blue";>Your Name:</h5></td>
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
				
					
								
							
								
								
								<a href="#myModal3" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Main Course</a>
								
								<div class="modal fade" id="myModal3">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Main Course</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">	
	                 <h1 class="modal-title">Main Course</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">	
	               
	  <hr><br><br><br>
<h2 style="color:orange" >Mantoo (10pcs)        ........ &#8364 12.50  </h2> 
Steamed minced beef & onion dumplings served with yellow split peas, garlic yogurt and sprinkled with dry mint

<h2 style="color:orange" >Qabuli Palaw          ........ &#8364 12.50</h2> 
Traditional Afghan aromatic rice cooked with raisins,carrots and tender pieces of lamb,served with chicken qorma and salad
<h2 style="color:orange" >Lamb Qorma           ........ &#8364 11.99</h2> 
Lamb stew served with freshly baked naan bread or challaw rice and salad 
<h2 style="color:orange" >Chicken Qorma         ........ &#8364 10.99</h2> 
Chicken stew served with freshlybaked naan bread or challaw rice and salad

<h2 style="color:orange" >Afghan Chilli           ........ &#8364 13.50</h2> 
Spicy stew of lamb with chick peas and Kidney beans served with freshly baked naan breador challaw rice and salad 

<h2 style="color:orange" >Kabul Platter for 4            ........ &#8364 62.99</h2> 
Selection of Mantoo, Qabuli Palaw,Chicken Qorma and Lamb Qorma or Afghan Chilli
           	 

			
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
						
							
								</div>
									<div class="col-sm-2">
								
								<a href="#myModal4" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Kababs</a>
								
								<div class="modal fade" id="myModal4">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Kababs</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h1 style="color:red">Kababs</h1><br><br>

	
		
	           <h2 style="color:orange" >   Chicken Shish Kebab   ........ &#8364  8.50</h2> 
 Marinated pieces of chicken breast grilled on a skewer
  <h2 style="color:orange" >   Murgh Kebab   ........ &#8364  8.50</h2> 
  Marinated chunks of chicken with bones grilled on a skewer
   <h2 style="color:orange" >  Lamb Shish Kebab    ........ &#8364 9.50 </h2> 
   Marinated pieces of lamb grilled on a skewer
    <h2 style="color:orange" >  Shamee Kebab    ........ &#8364 8.50 </h2> 
	Marinated beef and lamb delicately spiced and grilled on a skewer
	 <h2 style="color:orange" >   Double Shish Kebab   ........ &#8364  13.50</h2> 
	 A skewer of chicken shish and a skewer of Shamee Kebab
	  <h2 style="color:orange" >  Kebab Platter for 2    ........ &#8364 22.50 </h2>
Selection of Kebabs(Chicken, Shamee & lamb), served with salad,sauce, two freshly baked naan breads and two hot or cold drinks	  
	   <h2 style="color:orange" >   Vegetarian Kebab   ........ &#8364  7.50</h2> 
	   Mushroom, tomatoes, onions, courgette and green peppers grilled on a skewer
 All kebabs are served with salad,garlic and chilli sauce on freshly baked naan bread or lamb flavoured rice 
          
												
												
												
												
												
												
												
												
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
						
										</div>
									<div class="col-sm-2">
								
								<a href="#myModal" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Vegetarian Dishes</a>
								
								<div class="modal fade" id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Check Out variety Of Vegetarian</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												
											
	         
<h1 style="color:red">Vegetarian Dishes</h1><br><br>
 <h2 style="color:orange" >  Aush(Afghan Soup)  ........ &#8364  8.50</h2> 
Afghan noodles and vegetables soup, topped with yogurt, sprinkled with dry mint, served with side salad

 <h2 style="color:orange" >   Sabzi Challaw  ........ &#8364 8.50 </h2> 
 Stew of fresh spinach, cooked with onions and garlic, served with challaw rice and salad
 
  <h2 style="color:orange" >   Bandnjan Borani   ........ &#8364 9.50 </h2> 
  Stew of fresh aubergine topped with garlic yogurt, served with freshly baked naan bread and salad
   <h2 style="color:orange" >   Lubia Challaw   ........ &#8364 8.50 </h2> 
  Stew of red kidney beans cooked with onions, tomatoes and herbs topped with yogurt, served with challaw rice and salad
  
   <h2 style="color:orange" >   Nakhod Challaw  ........ &#8364 8.50 </h2> 
   Stew of chick peas cooked with onions, tomatoes and herbs, topped with yogurt, served with challaw rice and salad
    <h2 style="color:orange" >   Bhandi Challaw   ........ &#8364 8.50 </h2> 
  
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
					</div>
									<div class="col-sm-2">
								
								<a href="#myModal5" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Deserts</a>
								
								<div class="modal fade" id="myModal5">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Deserts</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h1 style="color:red">Deserts</h1><br><br>

			    <h2 style="color:orange" >  Baklava   ........ &#8364  3.20</h2> 
				Sweet pastry made of layers of filo pastry 
				
				 <h2 style="color:orange" >  Carrot Cake & Ice Cream  ........ &#8364 4.90</h2>
Homemade carrot cake served with ice cream

 <h2 style="color:orange" >   Ferene    ........ &#8364  4.30</h2> 
				 
			   Rose and cardamom scented milk pudding - thickened with corn flour
			   
			    <h2 style="color:orange" >  Sher-Beranj  ........ &#8364  4.30</h2> 
				Cardamom scented rice pudding
		
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
			
								</div>
									<div class="col-sm-2">
								<a href="#myModal1" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>SPECIAL OFFERS</a>
								
								<div class="modal fade" id="myModal1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Offers</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h1 style="color:red">Offers</h1><br>
  
			     <h1 style="color:red"> SPECIAL OFFERS </h1>
                 <h2>On the way</h2>
             
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
					
										</div>
									<div class="col-sm-2">
								
								<a href="#myModal2" role="button" style="background-color:#5F7E9F;" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Side Orders</a>
								
								<div class="modal fade" id="myModal2">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h1 class="modal-title">Side Orders</h1>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<div class="carousel-inner">
					<div class="item active">
									<div id="post1">						
												<h1 style="color:red">Sides</h1><br>

 <h2 style="color:orange" >   Lamb flavoured rice  ........ &#8364  3.50</h2> 
 <h2 style="color:orange" >    Challaw rice ........ &#8364 2.50 </h2> 
  <h2 style="color:orange" >    Lamb qorma ........ &#8364  6.50</h2> 
  <h2 style="color:orange" >   Chicken qorma ........ &#8364 4.50 </h2> 
  <h2 style="color:orange" >  Aubergine ........ &#8364  3.50</h2> 
  <h2 style="color:orange" >   Spinach ........ &#8364  3.00</h2> 
    <h2 style="color:orange" >  Bhandi........ &#8364 4.20 </h2> 
	  <h2 style="color:orange" >    Chick peas qorma ........ &#8364  3.50</h2> 
	    <h2 style="color:orange" >    Kidney beans  qorma ........ &#8364  3.50</h2> 
		
		  <h2 style="color:orange" >    Chips........ &#8364 2.50 </h2>
  <h2 style="color:orange" >   Naan bread ........ &#8364  1.50</h2> 	
  <h2 style="color:orange" >    Mast-Badrang (Natural yogurt, cucumber and fresh mint) ........ &euro &#8364  2.50</h2>   
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
			
	<br>
	<br><br><br>		
			
			
		
	

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



