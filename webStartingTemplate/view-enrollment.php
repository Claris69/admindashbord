<?php
	// 1. database connection
	require_once("logics/dbconnection.php");
	$sqlFetchEnrolledStudents =mysqli_query($conn,
	"SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
	while($fetchstudent= mysqli_fetch_array($sqlFetchEnrolledStudents))
	{
		$fullname =$fetchstudent['fullname'];
		$emailadress =$fetchstudent['email'];
		$phone =$fetchstudent['phonenumber'];
		$gender =$fetchstudent['gender'];
		$course =$fetchstudent['course'];
		$createdat =$fetchstudent['created-at'];
	}

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
    
	<div class="main-content pt-5">
		<!-- this will hold all code for our main content info -->
        
		<div class="container-fluid">
            <div class="row">
               <div class ="col-lg-6">
					<div class="card pt-3">
						<div class="card-header bg-dark text-white text-center ">
							<h4 class="card-title">personal information</h4>
						</div>
						<div class="card-body">
							<ul class=list-group >
								<li class="list-group-item">Fullname: <span class="float-end badge bg-primary"><?php echo $fullname?></span> </li>
								<li class="list-group-item">Email:<span class="float-end badge bg-secondary"><?php echo $emailadress?></span> </li>
								<li class="list-group-item">Phone number:<span class="float-end badge bg-danger"><?php echo $phone?></span> </li>
							</ul>
						</div>
				    </div>
			   </div>



			   <div class ="col-lg-6">
					<div class="card pt-3">
						<div class="card-header bg-dark text-white text-center ">
							<h4 class="card-title">other information</h4>
						</div>
						<div class="card-body">
							<ul class=list-group >
								<li class="list-group-item">Gender: <span class="float-end badge bg-primary"><?php echo $gender?></span> </li>
								<li class="list-group-item">Course:<span class="float-end badge bg-secondary"><?php echo $course?></span> </li>
								<li class="list-group-item">Created at:<span class="float-end badge bg-danger"><?php echo $createdat?></span> </li>
							</ul>
						</div>
				    </div>
			   </div>
                
            <div>
        </div>
	</div>
	<?php require_once('includes/scripts.php')?>





	
					
</body>
</html>  
            