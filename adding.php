	
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
	echo "<script>alert('please enter user name and password to leave the comment')</script>";
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
	echo "<script>alert('Must fill author and content field')</script>";
		echo "<script>window.open('home.php','_self')</script>";
	}
	else{

	
	
	
	$insert_query = "insert into posts (post_author,
	post_content)  values ('$post_author','$post_content')";
	if($row=mysql_query($insert_query)){
	?>
		<h5 style="color:red" ><?php echo $post_content ?></h5></a>


		
	<?php } 
	}
}
else 
{
echo "<script>alert('user name or password is worng')</script>";

}


}
}
?>				