<html>
<head>
	<title>Update Member Details</title>

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
			alert("Please input a member ID to search");
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
	<p class="ex1" style="font-size:30px"><b>Update member details in the database</b></p>
		<form name="myForm" onsubmit="return validateForm()" action="" method="POST">
			<input type="text" name="id" placeholder="Search a member by member ID"/><br/>
			<input type="submit" name="search" value="Search data"/>
		</form>
		
		<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,'library');
			
			if(isset($_POST['search']))
			{
				$id = $_POST['id'];
				
                $query = "SELECT * FROM member WHERE Member_ID='$id'";
				$query_run = mysqli_query($connection, $query);
				
				while($row = mysqli_fetch_array($query_run))
				{
					?>
					
					<form action="" method="POST">
						<input type="hidden" name="Member_ID" value="<?php echo $row['Member_ID']?>"/><br>
						<input placeholder="Firstname" type="text" name="Firstname" value="<?php echo $row['Firstname']?>"/><br>
						<input placeholder="Lastname" type="text" name="Lastname" value="<?php echo $row['Lastname']?>"/><br>
						<input placeholder="Gender" type="text" name="Gender" value="<?php echo $row['Gender']?>"/><br>
						<input placeholder="Address" type="text" name="Address" value="<?php echo $row['Address']?>"/><br>
						<input placeholder="Contact" type="text" name="Contact" value="<?php echo $row['Contact']?>"/><br>
						<input placeholder="Type ID" type="text" name="Type_ID" value="<?php echo $row['Type_ID']?>"/><br>
						<input placeholder="Year level" type="text" name="Year_Level" value="<?php echo $row['Year_Level']?>"/><br>
						<input placeholder="Member status" type="text" name="Member_Status" value="<?php echo $row['Member_Status']?>"/><br>
						
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
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Gender = $_POST['Gender'];
	$Address = $_POST['Address'];
	$Contact = $_POST['Contact'];
	$Type_ID = $_POST['Type_ID'];
	$Year_Level = $_POST['Year_Level'];
	$Member_Status = $_POST['Member_Status'];
	
	$query = "UPDATE `member` SET Firstname = '$_POST[Firstname]', Lastname = '$_POST[Lastname]', Gender = '$_POST[Gender]', 
	Address = '$_POST[Address]', Contact = '$_POST[Contact]', Type_ID = '$_POST[Type_ID]', Year_Level = '$_POST[Year_Level]', 
	Member_Status = '$_POST[Member_Status]' WHERE Member_ID='$_POST[Member_ID]' ";
	
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