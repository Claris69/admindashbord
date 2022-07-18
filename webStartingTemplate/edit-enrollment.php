<?php
	$message='';
	require_once('logics/dbconnection.php');

	$querystudent =mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."'  ");
	while($fetchstudent =mysqli_fetch_array($querystudent))
	{
		$id = $fetchstudent['no'];
		$fullname= $fetchstudent['fullname'];
		$phonenumber= $fetchstudent['phonenumber'];
		$emailadress= $fetchstudent['email'];
		$gender= $fetchstudent['gender'];
		$course= $fetchstudent['course'];

	}
	
	require_once('logics/process-update.php');

?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white " >
						
                            <h4> Edit student <?php echo $fullname ?></h4>
							<?php echo $message ?>
							<a href="students.php" class="float-start btn btn-outline-primary btn-sm "><i class="fa fa-arrow-left"></i> Return</a>
                        </div>
						<!-- <div class="card-body"> -->
		                    <form action="edit-enrollment.php?id=<?php echo $id?>" method="POST" >
								<div class="row">
									<div class="col-lg-6">
										<label for="fullName" class="form-label"><h6>full name</h6></label>
										<input type="text" name="fullname" value="<?php echo $fullname?>"class="form-control" placeholder="Enter your Full Name">
									</div>
										
									<div class="col-lg-6">
										<label for="phonenumber" class="form-label"><h6>Phone Number</h6></label>
										<input type="text" name="phonenumber" value="<?php echo $phonenumber?>"class="form-control" placeholder="+254">
									</div>

									<div class="col-lg-6">
										<label for="emailadress" class="form-label"><h6>email adress</h6></label>
										<input type="text" name="email" value="<?php echo $email?>" class="form-control" placeholder="Please Enter Your email Adress">
									</div>

									<div class="col-lg-6">
										<label for="gender"  class="form-label"><h6>what is your gender ?</h6></label> 
														
										<select class="form-select" name="gender">
											<option selected><?php echo $gender ?></option>
											<option value="male">male</option>
											<option value="female">female</option>
														
										</select>
									</div>

									
									<div class="col-lg-12">			
										
										<label for="course" name="course" class="form-label"><h6>What is your prefered course ?</h6></label> 
													
										<select class="form-select" name="course">
											<option selected><?php echo $course ?></option>
											<option value="software design">software design</option>
											<option value="cyber security">cyber security</option>
										</select>
                                    </diV>
													
									<div class="col-lg-6">
											<button type="submit" name="update"class= "btn btn-primary">update</button>
									</div>
								</div>
			        		</form>
						
							<br>

							<br>
							<hr>
			
						</div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>





	
					
</body>
</html>  
            