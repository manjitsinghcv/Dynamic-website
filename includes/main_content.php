<div>
<?php 
include("includes/connect.php");

$select_posts = "select * from posts order by rand() LIMIT 0,2";

$run_posts = mysql_query($select_posts);

while($row=mysql_fetch_array($run_posts)){

	$post_id = $row ['post_id'];
	$post_title = $row ['post_title'];
	$post_date = $row ['post_date'];
	$post_author = $row ['post_author'];
	$post_image = $row ['post_image'];
	$post_keywords = $row ['post_keywords'];
	$post_content = substr($row ['post_content'],0,200);


?>
<h2>
<a href="pages.php?id=<?php echo $post_id; ?>">
<?php echo $post_title; ?>
</a>
</h2>
<p align="right">Published on: <b><?php echo $post_date ; ?></b></p>
<p>Published by: <b><?php echo $post_author ; ?></b></p>
<center><img src="images/<?php echo $post_image; ?>" width="300" height="170"/></center>
<p align="justify" ><i><?php echo $post_content ; ?></i></p>
<p align="right"><a href="pages.php?id=<?php echo $post_id; ?>" >Read More</a></p>
<?php  }  ?>


</div>

