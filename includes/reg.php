 <?php

include("includes/connect.php");

if (isset($_POST['login']))
{
			$u_name1=$_POST['u_name1'];	
    		$u_pass1=$_POST['u_pass1'];
				if($u_name1==''){
					echo "<script> window.open('reg.php?user=Please enter the name','_self')</script>";
				}
				if($u_pass1==''){
					echo "<script> window.open('reg.php?pass=Please enter your password','_self')</script>";
				}	
			else{	
				$query="select * from user_reg where u_name='$u_name1' AND u_pass='$u_pass1'";
				$run=mysql_query($query) or die (mysql_error());
				if(mysql_num_rows($run)>0){
				echo "<script> window.open('index.html','_self')</script>";
				}
			}
}
?>





