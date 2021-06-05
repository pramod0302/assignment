<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<h1></h1>
	<div class="container">
		<center>
			<div class="jumbotron">
				<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
					<h1>ADMIN PAGE LOGIN</h1>
				<!-- </nav>		 -->
			</div>

			<div class="clLogin" class="container">
				<form name='myform' action='admininfo.php'>
					User Name:<br/>
					<input type = "text" name = "name" />
					<br><br>
					Password:<br>
					<input type= "password" name= "pass"/>

					<br><br>
					<!-- <input type= "submit" value= "START" class="btnclass" href="http://www.google.com" onClick="parent.location='index.html'" /> -->
					<!-- <input type=button type='submit' onClick="location.href='secondprogram.php'" value='click here'> -->
					<button class='button' type='submit'>SUBMIT</button>
					<!-- <form action="http://www.google.com" location.href = "http://www.google.com">
						<button>Click Me</button>
					</form> -->
				</form>
			</div>
		</center>
	</div>
<!-- 		try{
			$userValue = $_GET['value'];
			if($userValue = "lol") {
				echo "Incorrect password";
		}
		catch (Exception $e) {
			echo $e->errorMessage();
		}
 -->

</body>
</html>
