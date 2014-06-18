<?PHP

include("includes/connect.php");
$insert_query = "insert into draw (email) values ('".$_POST['abc']."')";
$run = mysql_query($insert_query);
$query = "select * from draw order by 1 DESC LIMIT 1";
$run = mysql_query($query);
while($row=mysql_fetch_array($run)){
echo "Congratulation Your email address is placed in draw and Your reference number is " ;
echo  $row["id"] ;
echo'<br/>';
echo '<br/>';
	}

?>