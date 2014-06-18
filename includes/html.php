	<!DOCTYPE html>
	
	<html>
	<head>
	<meta http-equiv="content-type" content="text/html"; charset=UTF-8">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
	  $("#btn").click(function(){
	    var msg = $('#txt').val();
		alert(msg);
	});
		});
	</script>
	</head>
	
	
	<body>
	<form method="post">
	<label>Msg:</label>
	<input type="text" id="txt" name="txt"><br/>
		<input type="button" id="btn" value="insert"><br/>
	
	
	</form>
	</body>
	</html>