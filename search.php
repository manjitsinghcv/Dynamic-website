<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Taxi-friend</title>
<link rel="stylesheet" href="style.css" media="all">


</head>

<body>
<div id="header"><?php include("includes/header.php"); ?></div>
<div id="navbar"><?php include("includes/navbar.php"); ?></div>
<div id="main_content">
<h1> Your search result is here </h1>
<?php 
include("includes/connect.php");
if(isset($_GET['search'])){
	$search_id = $_GET['value'];
	 $search_query = "select * from posts where
	 post_keywords like '%$search_id%' or post_title like '%$search_id%'";
	 
	 $run_query = mysql_query($search_query);
	  while ($search_row=mysql_fetch_array($run_query)){
	   $post_id = $search_row['post_id'];
	  $post_title = $search_row['post_title'];
	  $post_image = $search_row['post_image'];
	  $post_content = substr($search_row['post_content'],0,200);
	  
?>

<center>

<a href="pages.php?id=<?php echo $post_id ; ?>">
<h2> <?php echo $post_title; ?> </h2><a>
<img src="images/<?php echo $post_image;  ?>" 
width="300" height="100">

<p><?php echo $post_content; ?></p>
</center>
<?php } }?>


</div>












<div id="sidebar"><?php include("includes/sidebar.php"); ?></div>



<div id="footer">footer</div>


</body>
</html>