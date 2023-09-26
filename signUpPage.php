<?php
include ("connection.php");


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
</head>
<body>
    <h1>Sign up page</h1>
    <form action="" method="POST" >
        <label for="">Name</label><br>
        <input type="text" name="myname"><br>
        <label for="">Email</label><br>
        <input type="text" name="myemail"><br>
        <label for="">Paswoord</label><br>
        <input type="password" name="mypassword" id=""><br>
        <input type="submit" value="Sign Up" name="signup">
    </form>
</body>
</html>

<?php
 if(isset($_POST['signup'])){
  
  $fname = $_POST['myname'];
  $femail = $_POST['myemail'];
  $fpasword = $_POST['mypassword'];
  
  $inserquerrry = "insert into registration (name,email,password) values('$fname','$femail','$fpasword')";
  $data = mysqli_query($con,$inserquerrry);
  if($data){

    echo "data is send to database";
  }
  else{
    echo "data base sending failed";
  }

 }




?>