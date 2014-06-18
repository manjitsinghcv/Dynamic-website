	<!DOCTYPE html>
	
	<html>
	<head>
	<meta http-equiv="content-type" content="text/html"; charset=UTF-8">
	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
	  $("#btn").click(function(){
	    var msg = $('#txt').val();
		//alert(msg);
		
		$.ajax({
		type : "POST",
		url : "add.php",
		data : "txt="+msg,
		success : function (data){
		$('.data').html(data);
		}
	});
		});
		});
	</script>
	</head>
	
	
	<body>
	<form method="POST">
	<input type="text" id="txt" name="txt"><br/>
<input type="button" id="btn"value="submit" >
	
</form>
<div class="data"></div>
	
	
	</body>
	</html>