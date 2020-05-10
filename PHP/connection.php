<?php
$server="localhost";
$user="root";
$pass="";
$database="signup";
$con=mysqli_connect($server,$user,$pass,$database);
if($con){
    echo"connection is established";
}else{

    echo"connection is not established";
}

?>