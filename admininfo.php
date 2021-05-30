<!DOCTYPE html>
<html>
<head>
	<title>Admin Feedback</title>
	<link rel="stylesheet" type="text/css" href= "ext6.css">
</head>
<body>
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
		}
		// echo "Connected successfully\n '<br>'";
		// echo "Today is " .date("Y/m/d"). "<br>";
		date_default_timezone_set("Asia/Kolkata");
        echo "<table border='5' bordercolor='pink' align='center'>
        
        <tr>
            <th colspan='6'>Applied applications</th> 
        </tr>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Previous Experience</th>
            <th>Experience years</th>
            <th>Date</th>
            <th>Time</th>
        </tr>";
		$query = "SELECT * FROM `employeet`";
	    $my_var = 0;
	    // echo "<p>Items ordered are </p>";
	    if ($is_query_run = mysqli_query($conn,$query)) 
		{ 
			while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
		    {
		        echo "<tr>";
				echo "<td>" . $query_executed['name']. "</td>";
				echo "<td>" . $query_executed['email']. "</td>";
				echo "<td>" . $query_executed['expprev']. "</td>";
				echo "<td>" . $query_executed['expyears']. "</td>";
				echo "<td>" .date("Y/m/d"). "</td>";
				echo "<td>" .date("h:i:sa"). "</td>";
				echo "<p></p>";
		        echo "<tr>";
		    } 
		}
		else {
			echo "Error in execution";
		}
		// } 
		// else
		// { 
		//     echo "Error in execution"; 
		// } 
		mysqli_close($conn);
		?>
</body>
</html>