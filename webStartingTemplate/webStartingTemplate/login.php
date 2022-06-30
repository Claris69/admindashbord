<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-register</title>
    <meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    
      <div id="header">
          <p > <h5>Zalego| Admin register</h5></p>
       </div>

    <div class='container-fluid;  ' style="padding-inline-start:30% ; padding-inline-end:30%;" >
       <div id="image" style="padding-inline-start: 50%;">
        <img src="images/1.jpg" alt="Zalego" class="rounded-circle" height="0px">
       </div>

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
                    <label for="password" class="form-label"><h6>Password</h6></label>
                    <input type="text" class="form-control" name="password" placeholder="">
                </div>
                <br>
                <br>
                <!-- submit button -->
                <div class="submit-button">
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
                <div class="text mt-5">
                  <p >Have no account? Sign up <a href="register.php" style="text-decoration:none;">Here </a></P>
                </div>   
            </div>
        </form>
       </div>




    </div>






    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>