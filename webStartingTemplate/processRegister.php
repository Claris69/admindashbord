<?php
      require_once('connection.php');
      if(isset($_POST['submit']))

      {
        $username=$_POST[username];
        $email=$_POST[email];
        $password=$_POST[password];
        $cpass=$_POST[cpass];

        $sqlusername= mysqli_query($conn,"SELECT * FROM account WHERE username=$username");
        $checkusername=mysqli_num_row($sqlusername);



        $sqlemail= mysqli_query($conn,"SELECT * FROM account WHERE email=$email'");
        $checkemail=mysqli_num_row($sqlemail);


        if($checkusername != 0){
          $msg ="username already exists";
          
        }


        if($checkemail != 0){
          $msg ="email already in use. Please try a different email adress";
          
        }

        // password confirmation
        elseif($password != $cpass)
        {
          $msg ="password does not match";
        }

        // create insert query
        $sql =mysql_query($conn, "INSERT INTO account(username,email,password) VALUES('$username','$email','$password')");


        if($sql)
        {
          $msg= "Data submitted succefully";
        }

        else{
          $msg= 'Error';
        }
      }
?>