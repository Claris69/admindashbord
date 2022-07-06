<?php
 require_once('logics/dbconnection.php');

 $querystudent =mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."'  ");
 while($fetchstudent =mysqli_fetch_array($querystudent))
 {
	$fullname= $fetchstudent['fullname'];

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
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	<?php require_once('includes/scripts.php')?>
</body>
</html>