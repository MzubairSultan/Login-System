<?php

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