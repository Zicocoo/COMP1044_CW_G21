<?php
include("registration2.php"); //Include userlogin1b for checking username and password
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Library Log In</title>
		<style>
			body {
				background-image: url('3.jpg');
				height: 152%;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				margin-top: 0px;
				
			}
			
			.login{
				width:360px;
				margin:50px auto;
				font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
				border-radius:10px;
				border:2px solid #181818;
				padding:10px 40px 25px;
				margin-top:70px; 
				text-align: center;
				background-color: #181818;
				opacity: 0.7;
			}

			input[type=text], input[type=password]{
				border-radius: 5px;
				width:60%;
				padding:10px;
				margin-top:8px;
				border:1px solid #ccc;
				padding-left:5px;
				font-size:16px;
				font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
			}

			input[type=submit]{
				border-radius: 5px;
				width:60%;
				padding:10px;
				margin-top:8px;
				border:1px solid #ccc;
				padding-left:5px;
				font-size:16px;
				font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
			}
			
		</style>
		
		<script>
		function validateForm() {
			
			let a = document.forms["myForm"]["user"].value;
			if (a == "") {
				alert("Username must be filled out");
				return false;
			}
			
			let b = document.forms["myForm"]["pass"].value;
			if (b == "") {
				alert("Password must be filled out");
				return false;
			}
			
			let c = document.forms["myForm"]["fname"].value;
			if (c == "") {
				alert("Firstname must be filled out");
				return false;
			}
			
			let d = document.forms["myForm"]["lname"].value;
			if (d == "") {
				alert("Lastname must be filled out");
				return false;
			}
			
		}
		</script>

	</head>

	<body>
	
		<div class="login">
			<img src="1.jpg" height=90px width=90px>
			<h2 style="color:white; text-align: center; font-size: 35px; font-family: Lucida Console;">Library Management System</h1>
			<h1 align="center" style="color:white">User Registration Form</h1>

			<form name="myForm" onsubmit="return validateForm()" action="" method="post" style="text-align:center;">
				<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
				<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
				<input type="text" placeholder="Firstname" id="fname" name="fname"><br/><br/>
				<input type="text" placeholder="Lastname" id="lname" name="lname"><br/><br/>
				<input type="submit" value="Sign Up" name="submit">
				
			</form>
			
			<h3 style="color:white">Already have an account?&nbsp&nbsp&nbsp <a href="userlogin1a.php">login now</a></h3>
			
			<!--error message-->
			<span><?php echo $error; ?></span>
		</div>
		
	</body>
</html>
