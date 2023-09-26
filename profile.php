<?php
session_start();
$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {

}
else
{
    header('location:login.php');
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>profile</title>
    </head>

    <body>
        <h1>Hi Profile page</h1>
    </body>

    </html>





