<?php 
echo "processing.....";
	
	//connecting to database
	
	$conn = mysqli_connect('localhost','hello','12345','practice');
	
	if (isset($_POST['name'])) {
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		echo "YOUR name is: ". $_POST['name'];

		$query = "INSERT INTO ajaxform(name) VALUES('$name')";

		if (mysqli_query($conn, $query)) {
			echo "User added";
		}
		else{
			echo "Error: "+mysql_error($conn);
		}
	}


	if (isset($_GET['name'])) {
		echo "YOUR name is: ". $_GET['name'];
	}

?>