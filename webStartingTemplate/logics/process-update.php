<?php
    require_once('logics/dbconnection.php');
    //  updating user records
    if(isset($_POST['update']))
    {
        // fetch form data
        $fullname=$_POST['fullname'];
        $phone=$_POST['phonenumber'];
        $emailadress=$_POST['email'];
        $gender=$_POST['gender'];
        $course=$_POST['course'];

        // perform the sql query
        $updateRecords = mysqli_query($conn,"UPDATE enrollment SET fullname ='$fullname', phonenumber='$phone', email ='$emailadress', gender='$gender',course='$course'
        WHERE no='".$_GET['id']."'");

        if( $updateRecords)
        {
            $message = "Records Updated seccessfully";
        }
        else{
            $message = "error occured while updating";	
        }
        
    }
?>