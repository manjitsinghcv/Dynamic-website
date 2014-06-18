
<!DOCTYPE html>

<html >
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Code a Responsive Website with Twitter Bootstrap 3</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
	
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<script src="includes/js/validate.js"></script>
	</head>
	<body  style="background-color:#5F7E9F;">
	
		<div  style="background-color:#5F7E9F;" class="container" id="main">
		
			<div style="background-color:black;" class="navbar navbar-fixed-top">
				<div style="background-color:black;"class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img src="images/afghanlogo.png" style="margin-left:-95px" alt="Taste of kabul"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
								<ul style="margin-top:7px"class="nav navbar-nav">
							<li  class="active">
								<a href="home.php">Home</a>
							</li>
							</li>
								<li class="active">
								<a href="menu.php">Menu</a>
							</li>
							</li>
							
							<li class="active">
								<a href="location.php">Location</a>
							</li>
							
								<li class="active">
								<a href="aboutus.php">About Us</a>
							</li>
								<li class="active">
								<a href="contactus.php">Contact us</a>
							</li>
								<li class="active">
								<a href="registration.php">Signup</a>
							</li>
						
						
					</div><!-- end nav-collapse -->


				</div><!-- end container -->
			</div><!-- end navbar -->			
			
								
	<br>
	<br><br><br>		
						
	<br>	
			
			
	




	
			
	
			
			
		<div class="row" id="features">
				<div class="col-sm-6 feature">
						<div style="background-color:black;"class="panel">
							<div style="background-color:orange;"class="panel-heading">
							<h3 class="panel-title">Lucky Draw Entry Form</h3>
							<h5><font color="white">To enter in draw Please fill your email address and submit.</h5>
							</div><!-- end panel-heading -->
						 <div class="carousel-inner">
					<div class="item active">						
						<div id="post3">


									  <div id="draw">
	<script>
	$(document).ready(function(){
	  $("#btn").click(function(){
	    var msg = $('#abc').val();
		//alert(msg);
		
		$.ajax({
		type : "POST",
		url : "virus.php",
		data : "abc="+msg,
		success : function (data){
		$('#draw').html(data);
		}
	});
		});
		});
	</script>

	<form method="POST">
	<input type="email" id="abc" name="txt"><br/>
<input type="button" id="btn"value="submit" >
	
</form>
			 </div>
						</div>
						</div><!-- end panel -->
				</div><!-- end feature -->
						</div><!-- end panel -->
				</div><!-- end feature -->


	
				
<div class="col-sm-6 feature">
					<div style="background-color:black;"class="panel">
						<div style="background-color:orange;" class="panel-heading">
							<h3 class="panel-title">Contact Us Form</h3>
								<h5><font color="white">Please fill the form below to rate our services.</h5>
						</div><!-- end panel-heading -->
						<div class="carousel-inner">
					<div class="item active">
									<div id="post2">
									
<div id="post4">
									
	  <form id="emailForm" method="post" action="mailto:manjit_ms@hotmail.com">
	      		     <ul style="list-style-type:none;">
			             <li><br>
				             <label for="fname" class="rad">First Name:</label>
				             <input type="text" id="fname" name="first_name" placeholder="Your Name Here" />
							
			             </li>
		  			     <li>
				             <label for="sname" class="rad">Surname:</label>
				             <input type="text" id="sname" name="surname" />
			             </li>
			             <li>
				             <label for="email" class="lbl">Email:</label>
				             <input type="email" id="email" name="email" />
			             </li>			
		          		 <li>
				             <span  class="rad">Please rate our food and services.</span><br>
				             <label for="radio1">Exelent</label>&nbsp;
				             <input type="radio" id="radio1" name="Category" value="1" />
				             <label for="radio2">Good</label>
				             <input type="radio" id="radio2" name="Category" value="2" />
				             <label for="radio3">Average</label>
				             <input type="radio" id="radio3" name="Category" value="3" />
							 <label for="radio4">Poor</label>
				             <input type="radio" id="radio4" name="Category" value="4" />
			             </li>	
				     </ul>
				     <fieldset>
					     <legend>Any Comments:</legend>
						 <textarea id="comments" rows="5" cols="40" name="Comments"></textarea>
				     </fieldset>
		             <p>
			             <input type="submit" value="Submit" />
			             <input type="reset" />
		             </p>
	             </form>
									
									</div>
									
									</div>
									
			   
				</div><!-- end feature -->
				
			
				</div><!-- end feature -->
				</div><!-- end feature -->
		</div><!-- end feature -->				
			
			
		</div><!-- end panel -->
				</div><!-- end feature -->
						</div><!-- end panel -->
				</div><!-- end feature -->
	





		
	
						
	<br>
	<br><br><br>		
						
	<br>
	<br><br>
			
			
		
			
			
			
			
		
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	<!--<script src="http://code.jquery.com/jquery.js"></script>-->
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
			
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>


