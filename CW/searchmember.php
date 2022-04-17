<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <title>Search Member</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	<style>
	body {
		background-image: url('bg2.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Searching for a member in the database</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search a member by member ID/firstname/lastname">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Gender</th>
									<th>Address</th>
                                    <th>Contact</th>
                                    <th>Type ID</th>
                                    <th>Year Level</th>
									<th>Member Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","library");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM member WHERE CONCAT(Member_ID, Firstname, Lastname) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Member_ID']; ?></td>
                                                    <td><?= $items['Firstname']; ?></td>
                                                    <td><?= $items['Lastname']; ?></td>
                                                    <td><?= $items['Gender']; ?></td>
													<td><?= $items['Address']; ?></td>
                                                    <td><?= $items['Contact']; ?></td>
                                                    <td><?= $items['Type_ID']; ?></td>
                                                    <td><?= $items['Year_Level']; ?></td>
													<td><?= $items['Member_Status']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="9">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
</body>

</html>