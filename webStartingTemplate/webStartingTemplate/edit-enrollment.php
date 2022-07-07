<?php
 require_once('logics/dbconnection.php');

 $querystudent =mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."'  ");
 while($fetchstudent =mysqli_fetch_array($querystudent))
 {
	$fullname= $fetchstudent['fullname'];
	$phonenumber= $fetchstudent['phonenumber'];
	$emailadress= $fetchstudent['email'];
	$gender= $fetchstudent['gender'];
	$course= $fetchstudent['course'];

 }
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
                        <div class="card-header bg-dark text-center text-white">
                            <h4 >Edit student <?php echo $fullname ?></h4>
                        </div>
						<div class="card-body">
						<form action="enrol.php" method="POST">
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
						<input type="text" name="email" value="<?php echo $emailadress?>" class="form-control" placeholder="Please Enter Your email Adress">
					</div>

					<div class="col-lg-6">
						<label for="gender" name="gender" class="form-label"><h6>what is your gender ?</h6></label> 
									
						<select class="custom-select" >
							<option selected><?php echo $gender ?></option>
							<option value="male">male</option>
							<option value="female">female</option>
									
						</select>
					</div>
						
					<p style="text-align:left;">In order to complete your registration in the bootcamp, you are required to select one course you will be <br> undertaking.Please NOTE that: This will be your learning track during the 2-weeks immersion.</p>

					<div class="mb-5 mt-5 col-lg-6">
						<label for="course" name="course" class="form-label"><h6>What is your prefered course ?</h6></label> 
									
						<select class="custom-select">
							<option selected><?php echo $course?></option>
							<option value="software design">software design</option>
							<option value="cyber security">cyber security</option>
						</select>
					</div>
						
						
					<p style="text-align:left;" >You agree by providing your information you understand all our data privacy and security policy <br>
									outlined in our Terms & condition and the privacy policy statements. 
					</p>

					<div class="container mb-5 mt-5">
						<div class="form check">
							<input class="form-check-label" type="checkbox" value="" id="flexcheckdefault">
							<label class="form-check-label" for="flexcheckdefault mt-1">
								Agree terms and conditions
							</label>
						</div>
					</div>
								
					<div class="col-lg-6">
						<button type="submit" name="submitapplication"class= "btn btn-primary">Submit aplication</button>
					</div>
			</form>
						
								<br>

								<br>
								<hr>
			<!-- <p style="color:grey;" >Subscribe to get information ,latest news about <br> zalego academy</p>
			<form acation="enrol.php" method="POST">
				<div class="row">
					<div class="col-lg-12" style="text-align: center; margin-bottom:3px;">
											
						<input type="email" class="form-control" placeholder="Your email adress" >
						<button name="subscribe" class= "btn btn-primary">Subscribe</button>
					</div>
				</div>     
			</form>            -->
						</div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>





	
					
</body>
</html>  
            