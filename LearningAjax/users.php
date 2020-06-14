<?php

	$conn = mysqli_connect('localhost','hello','12345','practice');
	

	$query = "SELECT * FROM ajaxform";

	$result = mysqli_query($conn, $query);

	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($users);


?>