<!DOCTYPE html>
<html>
<head>
	<title>Submit page</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="homepage.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
<body>
	<center>
		<h1 class="display-2">Your application is submitted successfully</h1>
		<form name='myform' action='homepage.php'>
			<button class="btn btn-outline-success">GO TO HOMEPAGE</button>
		</form>
	</center>
	<?php
			// echo "<form name='form' action='' method='post'>

			// 	 </form>";
			// $value =  $_POST['subject'];
			// echo $value;
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "employee";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $database);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			} else {
				echo "Connection successful";
			}
			// echo "Connected successfully\n '<br>'";
			$query = "SELECT * FROM `employeet`";

			// echo "Connected successfully\n '<br>'";
			$query = "SELECT * FROM `employeet`";
	        $name = $_GET['name'];
	        $email = $_GET['email'];
	        $address = $_GET['address'];
	        $qualification = $_GET['qualification'];
	        $expyears = $_GET['expyears'];
	        $expprev = $_GET['exp'];
			echo "HELLO WORLD";
			$query = "INSERT INTO `employeet`(`address`, `email`, `expprev`, `expyears`, `name`, `qualification`) VALUES ('".$address."',
							'".$email."', '".$expprev."', '".$expyears."', '".$name."', '".$qualification."')";
			$my_var = 0;
			if ($is_query_run = mysqli_query($conn,$query)) 
			{ 
				// while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
			//    {
				// 	echo $query_executed['ord'];
			//    } 
			}
			else {
				echo "Error in execution";
			}
			mysqli_close($conn);
	?>
</body>
</html>