<?php
session_start();
//$conn = require_once "partials/dbconnection.php";
//var_dump($_POST);   



require('config.php');

if(isset($_POST["submit"])){

$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
$stmt = $conn->prepare("SELECT * FROM tb_user WHERE email = ?");

if(mysqli_num_rows($duplicate)> 0){
    echo
    "<script> alert('Username or email has alredy been taken'); </script>";
    
}
else{
    if ($password == $confirmpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO tb_user ( email, password) VALUES ('$email', '$password')";
        mysqli_query($conn,$query);
        echo
        "<script> alert('Registration successful'); </script>";
    }
else{
    echo
    "<script> alert('Password does not match')</script>";

}

    
}

}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <h2>Registration</h2>
    <form class="" action="registration.php" method="post" autocomplete="off">

       
        <label for="email">Email : </Label>
        <input type="email" name="email" id = "email" required value =""> <br>

        <label for="password">Password : </Label>
        <input type="password" name="password" id = "password" required value =""> <br>

        <label for="confirmpassword">Confirm password : </Label>
        <input type="password" name="confirmpassword" id = "confirmpassword" required value =""> <br>
        <button type="submit" name="submit">Register</button>

</form>
<br>
<a href="login.php">Login</a>


</body>
</html>
