<!DOCTYPE html>
<html>
  
<head>
    <title>Add Member</title>
	
	<style>
	body {
		background-image: url('bg1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	</style>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	
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
        <?php
  
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
        $fn = $_REQUEST['firstname'];
        $ln = $_REQUEST['lastname'];
        $g = $_REQUEST['gender'];
        $a = $_REQUEST['address'];
		$c = $_REQUEST['contact'];
        $ti = $_REQUEST['typeid'];
        $yl = $_REQUEST['yearlevel'];
        $ms = $_REQUEST['memberstatus'];
      
        // Performing insert query execution
        // here our table name is member
        $sql = "INSERT INTO member (Firstname, Lastname, Gender, Address, Contact, Type_ID, Year_Level, Member_Status) VALUES ('$fn','$ln','$g','$a','$c','$ti','$yl','$ms')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$fn\n $ln\n $g\n $a\n $c\n"
                . "$ti\n $yl\n $ms");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>