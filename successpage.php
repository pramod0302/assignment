<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
</head>
<body>
	<!-- Put success information here -->
	<p>Applied for the position successfully</p>


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

	?>

</body>
</html>