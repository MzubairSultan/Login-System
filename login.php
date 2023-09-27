<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <h1>Login System in php</h1>
    <div class="form">
        <form action="" method="POST">
    
           <input type="text" placeholder="Username" name="myname"><br><br>
           <input type="password" name="mypasword" id="" placeholder="Password"><br><br>
           <div> <a href="#" id="forget">Forget Password ?</a></div><br>
           <input type="submit" value="Login" name="login"><br><br>
           <div>New Member? <a href="signUpPage.php">Sign Up here</a></div>

        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login']))
{
 $email = $_POST['myname'];
 $pasword = $_POST['mypasword'];
 
 $selectQuery = "SELECT * FROM registration WHERE email  = '$email' && password = '$pasword'";

 $data = mysqli_query($con,$selectQuery);
 $total =mysqli_num_rows($data);
 // echo $total;

 if($total==1){
    $_SESSION['user_name'] =$email;
    header('location:profile.php');
   echo $total;
 }
 else{
    echo "login Falied";
 }
}

?>