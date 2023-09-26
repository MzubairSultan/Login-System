<?php
session_start();
$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {

}
else
{
    header('location:login.php');
}
$server = "localhost";
$username = "root";
$password = "";
$db_name = "signup";
$con = mysqli_connect($server,$username,$password,$db_name);
if($con){
    echo "connection is ok";
}
else{
    echo "connection is failed";
}

?>