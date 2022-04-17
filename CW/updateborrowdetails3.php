<html>
<head>
	<title>Update Borrow Details</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	<style>
	body {
		background-image: url('bg1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
	</style>
	
	<script>
	function validateForm() {
		
		let a = document.forms["myForm"]["id"].value;
		if (a == "") {
			alert("Please input a borrow ID to search");
			return false;
		}
	}
	</script>
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
	<p class="ex1" style="font-size:30px"><b>Update borrow details record in the database</b></p>
		<form name="myForm" onsubmit="return validateForm()" action="" method="POST">
			<input type="text" name="id" placeholder="Search a borrow details by borrow ID"/><br/>
			<input type="submit" name="search" value="Search data"/>
		</form>
		
		<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'library');
			
			if(isset($_POST['search']))
			{
				$id = $_POST['id'];
				
                $query = "SELECT * FROM borrowdetails WHERE Borrow_ID='$id'";
				$query_run = mysqli_query($connection, $query);
				
				while($row = mysqli_fetch_array($query_run))
				{
					?>
					
					<form action="" method="POST">
						<input type="hidden" name="Borrow_Details_ID" value="<?php echo $row['Borrow_Details_ID']?>"/><br>
						<input type="hidden" name="Book_ID" value="<?php echo $row['Book_ID']?>"/><br>
						<input type="hidden" name="Borrow_ID" value="<?php echo $row['Borrow_ID']?>"/><br>
						<input placeholder="Borrow status" type="text" name="Borrow_Status" value="<?php echo $row['Borrow_Status']?>"/><br>
						<input placeholder="Date return in YYYY-MM-DD HH:MM form" type="text" name="Date_Return" value="<?php echo $row['Date_Return']?>"/><br>
						
						<input type="submit" name="update" value="Update Data">
						
					</form> 
					
					<?php  
				}
			}
		?>
		
	</center>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'library');

if(isset($_POST['update']))
{
	$Borrow_Status = $_POST['Borrow_Status'];
	$Date_Return = $_POST['Date_Return'];
	
	$query = "UPDATE `borrowdetails` SET Borrow_Status = '$_POST[Borrow_Status]', Date_Return = '$_POST[Date_Return]' 
	WHERE Borrow_ID='$_POST[Borrow_ID]' ";
	
	$query_run= mysqli_query($connection,$query);
	
	if($query_run)
	{
		echo '<script>alert("Data Updated") </script>';
	}
	else
	{
		echo '<script> alert("Data Not Updated") </script>';
	}
}
?>
