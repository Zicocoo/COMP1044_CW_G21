<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "", "library");
			  
	// Check connection
	if($conn === false){
		die("ERROR: Could not connect. " 
			. mysqli_connect_error());
	}

	$sql = "DELETE FROM book WHERE Book_ID='". $_GET["userid"] . "'";
	if ($conn->query($sql) === TRUE) {
		$_SESSION['status'] = "Data Deleted Successfully !";
		header("Location: deletebook3.php");
	} else {
		$_SESSION['status'] = "Data Not Deleted";
		header("Location: deletebook3.php");
	}

	$conn->close();
?>
