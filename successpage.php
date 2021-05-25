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
			// echo "Connected successfully\n '<br>'";
			$query = "SELECT * FROM `employeet`";
	        $my_var = 0;
	        $firstname = $_GET['firstname'];
	        echo $firstname
			// if ($is_query_run = mysqli_query($conn,$query)) 
			// { 
			//     // echo "Query Executed"; 
			//     // loop will iterate until all data is fetched 

			//     while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
			//     { 
			//         // these four line is for four column 
			//         $picture = 'idli.jpg';

			//         echo "<tr>";
			// 		echo "<td>" . $query_executed['Item Name']. "</td>";
			// 		echo "<td id='test' height=100 width=100>" . $query_executed['Cost']. " </td>";
			// 		// echo "<td>" . $query_executed['Item Picture']. "</td>";
			// 		// echo $picture;
			// 		echo "<td> <img src=".$query_executed['Item Picture']." alt='' border=3 height=100 width=200></img> </td>";
			// 		//echo "<td> <input name=".$query_executed['Item Name']." id=".$query_executed['Item Name']." type=number min=0 max=10 value=0></td>";
			// 		echo "<td>" . $query_executed['info']. "</td>";
		 //  			echo 	"<td> <input name=".$query_executed['Item Name']." type='text' id=".$query_executed['Item Name']." type=number min=0 max=10 value=0></td>";
			// 		echo "</tr>";
			// 		$my_var += 1;
			// 		if($my_var == 5)
			// 		{
			// 			echo "<tr>
	  //           			<th class='wrapper' colspan='5'>Main Course</th> 
	  //       			</tr>";
			// 		}
			// 		if($my_var == 10) {
			// 			echo "<tr>
	  //           			<th class='wrapper' colspan='5'>Juice</th> 
	  //       			</tr>";	
			// 		}
			//     } 
			// 	echo "</table>";
			// 	$var = 'dosa';
			// 	// if(isset($_POST[$query_executed['Item Name']])){
			// 	// 	echo $_POST['dosa'];
			// 	// }
			// 	// if(isset($_POST['dosa'])){
			// 	// 	echo $_POST['dosa'];
			// 	// }
			// 	// echo "<button class='button' type='submit' onclick=window.open('admin.php','_blank') name='place' >PLACE ORDER</button>";
			// 	echo "<div class='wrapper'>
			// 		<button class='button' type='submit' name='place' >PLACE ORDER</button> 
			// 		</div>";

			// 	$varName = $_GET['name'];
			// 	$varTable = $_GET['tablenumber'];
			// 	$varOrderType = $_GET['orderType'];
			// 	echo "<input type='hidden' name='name' value='".$varName."' />";
			// 	echo "<input type='hidden' name='tablenumber' value='".$varTable."' />";				
			// 	echo "<input type='hidden' name='orderType' value='".$varOrderType."' />";				
			// 	echo "</form>";
			// 	// $value = $_POST['dosa'];
			// 	// echo $value;
			// } 
			// else
			// { 
			//     echo "Error in execution"; 
			// } 
			// mysqli_close($conn);
		?>

</body>
</html>