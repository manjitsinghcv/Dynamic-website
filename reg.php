<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
@import url("style.css");
body,td,th {
	color: #936;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div id="header"><?php include("includes/header.php"); ?></div>

<?php

$con=mysql_connect("localhost","root","198017rms") or die (mysql_error());
$db=mysql_select_db("my_db",$con) or die (mysql_error());

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
				echo "<script> window.open('index.php','_self')</script>";
				}
			}
}
?>















<div class="xx1"">
  <form action="reg.php" method="post">
  <table bgcolor="#CCCCCC" width="266" height="284" border="0" align="center"><caption style="color:Blue"><h2>New to Taxi-Friend?</h2><h3>Register Here</caption>


  <tr>
        <th  bgcolor="#CCCCCC"><h1 style="color:yellow">Taxi-Friend</h1></th>
  <tr>
        <td  bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp; Username<br><input style=margin-left:20px; name="u_name" type="text" id="u_name" v>&nbsp;</td>
  </tr>
  <tr>
   
    <td bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp; Password<br><input style=margin-left:20px; type="password" name="u_pass" id="u_pass"></td>
  </tr>
  <tr>
    
    <td bgcolor="#CCCCCC">&nbsp; &nbsp; &nbsp;Email<br><input style=margin-left:20px; type="text" name="u_email" id="u_email"></td>
  </tr>
  <tr bgcolor="#87E3C7" style="text-align: center">
    <td colspan="2" bgcolor="#CCCCCC"><input name="submit" type="submit" id="submit" formaction="reg.php" value="Sign up"></td>
    </tr>
</table>


</form>
</div>

</body>
</html>
<?php

$con=mysql_connect("localhost","root","198017rms") or die (mysql_error());
$db=mysql_select_db("my_db",$con) or die (mysql_error());

if (isset($_POST['submit']))
{
	
$name=$_POST['u_name'];	
$pass=$_POST['u_pass'];
$email=$_POST['u_email'];	



	if ($name ==''){
	echo "<script>alert ('Please enter your name')</script>";
	exit();
	}
	if ($pass==''){
	echo "<script>alert ('Please enter a password')</script>";
	exit();
	}
	if ($email==''){
	echo "<script>alert ('Please enter your email')</script>";
	exit();
	}
	
else{
	$que= "insert into user_reg (u_name,u_pass,u_email) values ('$name','$pass','$email')";
	
	if(mysql_query($que)){
		echo "<script>alert ('Registration Successfull')</script>";
		echo "<script> window.open('index.php','_self')</script>";
		
	}
}	
}

?>


