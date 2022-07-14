<?php
$msg='';
require_once('processRegister.php');

?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php')?>
<body>
    
      <div id="header">
          <p > <h5>Zalego| Admin register</h5></p>
       
	<?php require_once('includes/navbar.php')?>
    <span><?php echo $msg ?></span>
       <div id="form" class="shadow" >
        <form >
            <div class=row>
                <!-- form section 1 -->
                <div class=col-lg-12>
                    <label for="username" class="form-label"><h6>Username</h6></label>
                    <input type="text" class="form-control" name="username" placeholder="">
                </div>

                <!-- form section 2 -->
                <div class=col-lg-12>
                    <label for="email" class="form-label"><h6>email</h6></label>
                    <input type="text" class="form-control" name="email" placeholder="">
                </div>
                <!-- form section 3 -->
                <div class=col-lg-12>
                    <label for="password" class="form-label"><h6>Password</h6></label>
                    <input type="text" class="form-control" name="password" placeholder="">
                </div>

                <!-- form section 4 -->
                <div class=col-lg-12>
                    <label for="confirmpassword" class="form-label"><h6>Confirm Password</h6></label>
                    <input type="text" class="form-control" name="cpass" placeholder="">
                </div>
                <br>
                <br>
                <!-- submit button -->
                <div class="submit-button">
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
                <div class="text mt-5">
                  <p >Have no account? Sign up <a href="login.php" style="text-decoration:none;">Here </a></P>
                </div>   
            </div>
        </form>
       </div>




    </div>






    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>