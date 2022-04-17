<!DOCTYPE html>
<html>
  
<head>
    <title>Add Book</title>
	
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
        $bt = $_REQUEST['booktitle'];
        $cid = $_REQUEST['categoryid'];
        $a = $_REQUEST['author'];
        $bc = $_REQUEST['bookcopies'];
		$bp = $_REQUEST['bookpub'];
        $pn = $_REQUEST['publishername'];
        $isbn = $_REQUEST['isbn'];
        $cy = $_REQUEST['copyrightyear'];
        $da = $_REQUEST['dateadded'];
		$bs = $_REQUEST['bookstatus'];
          
        // Performing insert query execution
        // here our table name is book
        $sql = "INSERT INTO book (Book_Title, Category_ID, Author, Book_Copies, Book_Pub, Publisher_Name, ISBN, Copyright_Year, Date_Added, Book_Status) VALUES ('$bt','$cid','$a','$bc','$bp','$pn','$isbn','$cy','$da','$bs')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$bt\n $cid\n $a\n $bc\n $bp\n"
                . "$pn\n $isbn\n $cy\n $da\n $bs");
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