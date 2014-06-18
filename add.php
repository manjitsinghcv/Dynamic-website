<?PHP

include("includes/connect.php");


	

	
	$insert_query = "insert into msg (msg) values ('".$_POST['txt']."')";
	$run = mysql_query($insert_query);
	$query = "select * from msg order by 1 DESC";

$run = mysql_query($query);
while($row=mysql_fetch_array($run)){
echo $row["msg"]. '<br/>';
	}

?>