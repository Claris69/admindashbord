<?php
    require_once('logics/dbconnection.php');
    //  updating user records
    if(isset($_POST['update']))
    {
        // fetch form data
        $firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$emailadress=$_POST['email'];
        $phonenumber=$_POST['phonenumber'];
        $message=$_POST['message'];

        // perform the sql query
        $updateRecords = mysqli_query($conn,"UPDATE enrollment SET firstname ='$firstname',lastname ='$lastname',email ='$emailadress',  phonenumber='$phonenumber',  message='$message'       WHERE no='".$_GET['id']."'");

        if( $updateRecords)
        {
            $message = "Records Updated seccessfully";
        }
        else{
            $message = "error occured while updating";	
        }
        
    }
?>