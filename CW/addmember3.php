<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Add Member</title>
	<script>
	function validateForm() {
		
		let a = document.forms["myForm"]["firstname"].value;
		if (a == "") {
			alert("Firstname must be filled out");
			return false;
		}
		
		let b = document.forms["myForm"]["lastname"].value;
		if (b == "") {
			alert("Lastname must be filled out");
			return false;
		}
		
		let c = document.forms["myForm"]["address"].value;
		if (c == "") {
			alert("Address must be filled out");
			return false;
		}
		
		let d = document.forms["myForm"]["contact"].value;
		if (d == "") {
			alert("Contact must be filled out");
			return false;
		}
		
	}
	</script>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	
	<style>
	body {
		background-image: url('bg1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	p.ex1 {
		font-size: 40px;
	}
	</style>
	
</head>
  
<body>
	<header>
		<h1>Nottingham<span>Library</span></h1>
		<nav>
			<ul>
				
				<li><a href="homepage2.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="userlogin1a.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
				
				
			</ul>
		</nav>
	
	</header>
	
    <center>
	
		<p class="ex1"><b>Adding a member to the database</b></p>
  
        <form name="myForm" onsubmit="return validateForm()" action="addmember4.php" method="post">
			
			<p>
                <label for="firname">Firstname:</label>
                <input type="text" name="firstname" id="firname">
            </p>
			
			<p>
                <label for="lasname">Lastname:</label>
                <input type="text" name="lastname" id="lasname">
            </p>
			
			<p>
                <label for="gen">Gender:</label>
                <select id="gen" name="gender" >
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
            </p>
			
			<p>
                <label for="addre">Address:</label>
                <input type="text" name="address" id="addre">
            </p>
			
			<p>
                <label for="cont">Contact:</label>
                <input type="text" name="contact" id="cont">
            </p>
			
			<p>
                <label for="tyid">Type ID:</label>
				<select id="tyid" name="typeid">
					<option value="2">Teacher</option>
					<option value="20">Associate account</option>
					<option value="21">Non-teaching</option>
					<option value="22">Student</option>
					<option value="32">Alumni</option>
				</select>
                
            </p>
			
			<p>
                <label for="yerlev">Year Level:</label>
                <select id="yerlev" name="yearlevel">
					<option value="Faculty">Faculty</option>
					<option value="First Year">First Year</option>
					<option value="Second Year">Second Year</option>
					<option value="Third Year">Third Year</option>
					<option value="Fourth Year">Fourth Year</option>
				</select>
            </p>
			
			<p>
                <label for="memsta">Member Status:</label>
                <select id="memsta" name="memberstatus">
					<option value="Active">Active</option>
					<option value="Banned">Banned</option>
				</select>
            </p>
			
            <input type="submit" value="Submit">
			<input type="reset" value="Reset">
			
        </form>
		
    </center>
</body>
  
</html>

