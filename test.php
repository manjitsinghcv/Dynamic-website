				
												
								 <form method="post" action="test.php" enctype="multipart/form-data">
<table width="65" align="center" border="10">
<tr>
<td align="center" bgcolor="yellow" colspan="4"><h1>Insert comment Here</h1></td>
</tr>


<tr>
<td align="right">Post Author:</td>
<td><input type="text" name="author" size="28"></td>
</tr>

<tr>
<td align="right">Post Content:</td>
<td><textarea name="content" cols="30" rows="15"></textarea></td>
</tr>

<tr>

<td align="center" colspan="4"><input type="submit" name="submit" value="Publish Now"></td>
</tr>
</table>
</form>
									
	
<?php

include("includes/connect.php");

if(isset($_POST['submit']))
{
	 

	 $post_author = $_POST['author'];
	
	 $post_content = $_POST['content'];
	


	if($post_author ==''  or
	$post_content ==''  )
	{
	echo "<script>alert('any of the field id empty')</script>";
	exit();
	}
	else{

	
	
	
	$insert_query = "insert into posts (post_author,
	post_content)  values ('$post_author','$post_content')";
	if(mysql_query($insert_query)){
	echo "<script>alert('post published successfuly'></script>";
	echo "<script>window.open('index.php','_self')</script>";
	}
}
}
?>


