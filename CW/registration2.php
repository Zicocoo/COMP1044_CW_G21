<?php

	$error='';//Variable to store error message;
	if(isset($_POST['submit'])){
		
			// servername => localhost
			// username => root
			// password => empty
			// database name => library
			$conn = mysqli_connect("localhost", "root", "", "library");
			  
			// Check connection
			if($conn === false){
				die("ERROR: Could not connect. " 
					. mysqli_connect_error());
			}
			  
			// Taking all values from the form data(input)
			$u = $_REQUEST['user'];
			$p = $_REQUEST['pass'];
			$f = $_REQUEST['fname'];
			$l = $_REQUEST['lname'];
		  
			// Performing insert query execution
			// here our table name is member
			$sql = "INSERT INTO users (Username, Password, Firstname, Lastname) VALUES ('$u','$p','$f','$l')";
			  
			if(mysqli_query($conn, $sql)){
				$error = "<p><b> <font color=green>Sign Up Successfully !!!</font></b> </p>";
			} else{
				echo "ERROR: Hush! Sorry $sql. " 
					. mysqli_error($conn);
			}
				  
			// Close connection
			mysqli_close($conn);
			
	}

?>