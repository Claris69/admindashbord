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
				<div class="col-lg-12" style="padding-top: 10px;">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
					<div class="card-body"></div>
					<div class="card-footer"></div>
				</div>
			
				<div class="col-lg-3"  style="padding-top: 1px;" >
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>

				<div class="col-lg-3"  style="padding-top: 1px;" >
					<div class="card-header bg-dark text-white text-center">
						<span>courses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>

				<div class="col-lg-3"  style="padding-top: 1px;" >
					<div class="card-header bg-dark text-white text-center">
						<span>campus</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>

				<div class="col-lg-3"  style="padding-top: 1px;" >
					<div class="card-header bg-dark text-white text-center">
						<span>Users</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-user fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
			
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student analysis</span>
					</div>
					<div class="body-shadow">
						<span><i class="fa fa-line-chart ;fa-3x"></i></span>
					</div>

					
				</div>
			</div>
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>
</body>
</html>