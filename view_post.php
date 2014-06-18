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
					<a class="navbar-brand" href="/"><img src="images/afghanlogo.png" style="margin-top:-13px" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
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
			
		

		<h2><a href="view_post.php">view post</a></h2>

<h2><a href="index.php?insert=insert">inser new post</a></h2>

<h2><a href="#">view comments</a></h2>
</div>


<table width="1250" bgcolor="pink" border="5" align="center" >

<tr>

<td colspan="10" align="center" bgcolor="yellow"><h1>
	view all Posts</h1></td>

</tr>
<tr bgcolor="orange">
<th>Post No :</th>
<th>Post Date  :</th>
<th>Post Author :</th>
<th>Post Title:</th>
<th>Post Image:</th>
<th>Post Content  :</th>
<th>Delete Post  :</th>
<th>Edit Post  :</th>
</tr>


<?php   
include("includes/connect.php");

$query = "select * from posts order by 1 DESC";

$run = mysql_query($query);

while($row=mysql_fetch_array($run)){
    $post_id = $row['post_id'];
	$post_date = $row['post_date'];
	$post_author = $row['post_author'];
	$post_title = $row['post_title'];
	$post_image = $row['post_image'];
	$post_content = substr($row['post_content'],0,50);
?>
<tr align="center">
<td><?php echo $post_id; ?></td>
<td><?php echo $post_date; ?></td>
<td><?php echo $post_author; ?></td>
<td><?php echo $post_title; ?></td>
<td><img src="../images/<?php echo $post_image ; ?>" width:"80" height="80"></td>
<td><?php echo $post_content; ?></td>
<td><a link href="delete.php?del=<?php echo $post_id;?>">Delete</a></td>
<td><a link href="edit.php?edt=<?php echo $post_id ;?>">Edit</a></td>
</tr>


<?php }  ?>



		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
	

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

