<?php

	$error='';//Variable to store error message;
	if(isset($_POST['submit'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
			$error = "<p><b> <font color=red>Please Input Username and Password</font> </b></p>";
		}
		else
		{
			$un=$_POST['user'];
			$pw=$_POST['pass'];
			
			$conn = mysqli_connect("localhost", "root", "");
			
			$db = mysqli_select_db($conn, "library");
			
			$query = mysqli_query($conn,"SELECT Username, Password FROM users WHERE Username='$un' AND Password='$pw'");
			
			$rows = mysqli_num_rows($query);
			if($rows == 1){
				header("location: homepage2.php");//redirecting to other page
			}
			else
			{
				$error = "<p><b><font color=red>Username or Password is Invalid</font></b></p>";
			}
			mysqli_close($conn);//Closing connection
			
		}
	}

?>
	