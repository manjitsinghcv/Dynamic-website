



<?php 
include("includes/connect.php");

$query = "select * from posts order by post_id DESC LIMIT 0,4";

$run = mysql_query($query);

while ($row=mysql_fetch_array($run)){

    
		
		 $author = $row['post_author'];
 $post_content = $row['post_content'];
?>

<h5 style="color:red" ><?php echo $post_content ?></h5></a>

<h6 style="align:right" > <?php echo $author ?></h6></a>




<?php } ?>






