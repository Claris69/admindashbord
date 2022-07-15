<?php
 require_once('logics/dbconnection.php');

 
$sql= mysqli_query($conn,"SELECT * FROM contactus" );
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
					</div>
				</div>
			
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<!-- <div class="card-body"> -->
								<table class="table table-striped table-hover table-responsive" style="font-size:12px">
									<thead>
										<tr>
											<th scope="col">NO</th> 
											<th scope="col">FIRST NAME</th>
											<th scope="col">LAST NAME</th>
											<th scope="col">EMAIL</th>
											<th scope="col">PHONE NUMBER</th>
											<th scope="col">MESSAGE</th>
											<th scope="col">CREATED AT</th>
											
										</tr>
									</thead>

									<tbody>
										<?php while($fetchEnrollmentRecord=mysqli_fetch_array($sql)) { ?>
											<tr>
												<td><?php echo $fetchEnrollmentRecord['no']?></td>
												<td><?php echo $fetchEnrollmentRecord['firstname']?></td>
												<td><?php echo $fetchEnrollmentRecord['lastname']?></td>
												<td><?php echo $fetchEnrollmentRecord['email']?></td>
												<td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
												<td><?php echo $fetchEnrollmentRecord['message']?></td>
												<td><?php echo $fetchEnrollmentRecord['created-at']?></td>
												
												
                                                <!-- <td>
													<a href="#" class="btn btn-primary btn-sm" ><i class="fa fa-edit"> </i></a>
													<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"> </i></a>
													<a href="delete-contactus.php?id=<?php echo$fetchEnrollmentRecord['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"> </i></a>
												</td>							 -->
											</tr>

										<?php } ?>	
				
									</tbody>
								</table>
							<!-- </div> -->
						</div>
					</div>
				</div>
		
				
				
				
			</div>
		</div>
		<?php require_once('includes/scripts.php')?>
    </body>
</html>