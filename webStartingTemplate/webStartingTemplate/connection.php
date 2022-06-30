<?php
$server="localhost";
$username="root";
$password="";
$database="Zalego";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo 'Data base connection succesful'
}
else{
    echo 'Error occured'
}


?> 