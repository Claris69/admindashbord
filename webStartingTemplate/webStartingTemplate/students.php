
<?php
 require_once('logics/dbconnection.php');
?>




<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
    <body>		
		<!-- All our code. write here   -->
		<?php require_once('includes/navbar.php')?>
		<div class="sidebar">
			<!-- this will hold all code for our slidebar info -->
			<?php require_once('includes/sidebar.php')?>
		</div>
		<div class="main-content">
			<!-- this will hold all code for our main content info -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12" style="padding-top: 10px;">
						<div class="card-header bg-dark text-white text-center">
							<span>Top content</span>
						</div>
						<div class="card-body"></div>
						<div class="card-footer"></div>
					</div>

				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card-body">
							<table class="table table-striped table-hover table-responsive">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">FULLNAME</th>
										<th scope="col">PHONE</th>
										<th scope="col">EMAIL</th>
										<th scope="col">COURSE</th>
										<th scope="col">GENDER</th>
										<th scope="col">ENROLLED ON</th>
										<th scope="col">ACTION</th>
									</tr>
								</thead>

								<tbody>
									<?php while($fetchEnrollmentRecord=mysqli_fetch_array($sql)) { ?>
										<tr>
											<td><?php echo $fetchEnrollmentRecord['no']?></td>
											<td><?php echo $fetchEnrollmentRecord['fullname']?></td>
											<td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
											<td><?php echo $fetchEnrollmentRecord['email']?></td>
											<td><?php echo $fetchEnrollmentRecord['gender']?></td>
											<td><?php echo $fetchEnrollmentRecord['course']?></td>
											<td><?php echo $fetchEnrollmentRecord['created-at']?></td>
											
											<td>
												<a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-primary btn-sm" ><i class="fa fa-edit"> </i></a>
												<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"> </i></a>
												<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"> </i></a>
											</td>								
										</tr>

									<?php } ?>	
			
								</tbody>
							</table>
						</div>
					</div>
							
					
				</div>
		
				
				
				
			</div>
		</div>
		<?php require_once('includes/scripts.php')?>
    </body>
</html>