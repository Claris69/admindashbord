<?php
	 require_once('logics/dbconnection.php');
	//  counting all numbers of students
	$queryEnrolledStudents =mysqli_query($conn, "SELECT * FROM enrollment");
	$countAllStudents= mysqli_num_rows($queryEnrolledStudents);

	// count by gender
	$queryEnrolledFemale =mysqli_query($conn, "SELECT * FROM enrollment WHERE gender ='female' ");
	$countAllFemale =mysqli_num_rows($queryEnrolledFemale);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styleenroll.css">
</head>
<body>
	
	
	
	<?php require_once('includes/navbar.php')?>
	<!-- All our code. write here   -->
	
	<div class="sidebar" style="background-color:#07B00D;">
		<!-- this will hold all code for our slidebar info -->
		<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<!-- this will hold all code for our main content info -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12" style="padding-top: 10px; padding-bottom:30px;">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row">
				
					
				<div class="col-lg-3" >
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Students</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-group fa-3x"></i></span>
							<span class="float-end badge bg-dark rounded-pill"><?php echo $countAllStudents?></span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				
				<div class="col-lg-3" >
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>courses</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-folder-open fa-3x"></i></span>
							<span class="float-end badge bg-dark rounded-pill"><?php echo $countAllFemale?></span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				
				<div class="col-lg-3" >
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>campus</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-graduation-cap fa-3x"></i></span>
							<span class="float-end">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
			
				<div class="col-lg-3" >
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Users</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-user fa-3x"></i></span>
							<span class="float-end">00</span>
						</div>
						<div class="card-footer"></div>
                    </div>
				</div>
            </div>
			<div class="row pt-5px">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student analysis</span>
					</div>
					<div class="body-shadow">
						<span><i class="fa fa-line-chart fa-3x"></i></span>
					</div>

					
				</div>
            </div>
			
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>
</body>
</html>