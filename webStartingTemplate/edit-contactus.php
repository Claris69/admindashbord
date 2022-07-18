<?php
	$message='';
	require_once('logics/dbconnection.php');

	$querystudent =mysqli_query($conn, "SELECT *FROM contactus WHERE no='".$_GET['id']."'  ");
	while($fetchstudent =mysqli_fetch_array($querystudent))
	{
		
		$id = $fetchstudent['no'];
		$firstname= $fetchstudent['firstname'];
		$lastname= $fetchstudent['lastname'];
		$emailadress= $fetchstudent['email'];
		$phonenumber= $fetchstudent['phonenumber'];
		$message= $fetchstudent['message'];
      

	}
	
	require_once('logics/contactus-updates.php');

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
						
                            <h4> Edit student <?php echo $firstname ?></h4>
							<!-- <?php echo $message ?> -->
							<a href="contactus.php" class="float-start btn btn-outline-primary btn-sm "><i class="fa fa-arrow-left"></i> Return</a>
                        </div>
						<!-- <div class="card-body"> -->
		                    <form action="edit-contactus.php?id=<?php echo $id?>" method="POST" >
								<div class="row">
									<div class="col-lg-6">
										<label for="firstName" class="form-label"><h6>first name</h6></label>
										<input type="text" name="firstname" value="<?php echo $firstname?>"class="form-control" >
									</div>
                                    <div class="col-lg-6">
										<label for="lastName" class="form-label"><h6>last name</h6></label>
										<input type="text" name="lastname" value="<?php echo $lastname?>"class="form-control" >
									</div>
                                    <div class="col-lg-6">
										<label for="email" class="form-label"><h6>email</h6></label>
										<input type="text" name="email" value="<?php echo $emailadress?>"class="form-control" >
									</div>
									<div class="col-lg-6">
										<label for="phonenumber" class="form-label"><h6>phonenumber</h6></label>
										<input type="text" name="phonenumber" value="<?php echo $emailadress?>"class="form-control" >
									</div>
                                    <div class="col-lg-6">
										<label for="message" class="form-label"><h6>message</h6></label>
										<input type="text" name="message" value="<?php echo $message?>"class="form-control" >
									</div>
										
													
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
            