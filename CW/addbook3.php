<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Add Book</title>
	<script>
	function validateForm() {
		
		let a = document.forms["myForm"]["booktitle"].value;
		if (a == "") {
			alert("Book title must be filled out");
			return false;
		}

		let b = document.forms["myForm"]["author"].value;
		if (b == "") {
			alert("Author must be filled out");
			return false;
		}
		
		let c = document.forms["myForm"]["bookcopies"].value;
		if (c == "") {
			alert("Book copies must be filled out");
			return false;
		}
		
		let d = document.forms["myForm"]["bookpub"].value;
		if (d == "") {
			alert("Book publication must be filled out");
			return false;
		}
		
		let e = document.forms["myForm"]["publishername"].value;
		if (e == "") {
			alert("Publisher name must be filled out");
			return false;
		}
		
		let f = document.forms["myForm"]["isbn"].value;
		if (f == "") {
			alert("ISBN must be filled out");
			return false;
		}
		
		let g = document.forms["myForm"]["copyrightyear"].value;
		if (g == "") {
			alert("Copyright year must be filled out");
			return false;
		}
		
		let h = document.forms["myForm"]["dateadded"].value;
		if (h == "") {
			alert("Date added must be filled out");
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
			
			<p class="ex1"><b>Adding a book to the database</b></p>
		  
			<form name="myForm" onsubmit="return validateForm()" action="addbook4.php" method="post">
					   
				<p>
					<label for="bootil">Book Title:</label>
					<input type="text" name="booktitle" id="bootil">
				</p>
		  
				<p>
					<label for="caid">Category ID:</label>
					<select id="caid" name="categoryid">
						<option value="1">Periodical</option>
						<option value="2">English</option>
						<option value="3">Math</option>
						<option value="4">Science</option>
						<option value="5">Encyclopedia</option>
						<option value="6">Filipiniana</option>
						<option value="7">Newspaper</option>
						<option value="8">General</option>
						<option value="9">References</option>
					</select>
				</p>
		  
				<p>
					<label for="aut">Author:</label>
					<input type="text" name="author" id="aut">
				</p>
		  
				<p>
					<label for="booco">Book Copies:</label>
					<input type="text" name="bookcopies" id="booco">
				</p>
		  
				<p>
					<label for="boopub">Book Publication:</label>
					<input type="text" name="bookpub" id="boopub">
				</p>
					
				<p>
					<label for="pubnam">Publisher Name:</label>
					<input type="text" name="publishername" id="pubnam">
				</p>
		  
				<p>
					<label for="isb">ISBN:</label>
					<input type="text" name="isbn" id="isb">
				</p>
					
				<p>
					<label for="coprig">Copyright Year:</label>
					<input type="text" name="copyrightyear" id="coprig">
				</p>
					
				<p>
					<label for="dateadd">Date Added:</label>
					<input type="text" name="dateadded" id="dateadd" placeholder="YYYY-MM-DD HH:MM">
				</p>
					
				<p>
					<label for="boosta">Book Status:</label>
					<select id="boosta" name="bookstatus">
						<option value="New">New</option>
						<option value="Old">Old</option>
						<option value="Damage">Damage</option>
						<option value="Lost">Lost</option>
					</select>
				</p>
					  
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
					
			</form>
				
		</center>
		
</body>
  
</html>