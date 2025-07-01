<?php
require('config.php');
session_start();


if (isset($_POST["submit"])) {
    $emaillogin = $_POST["email"];
    $pwlogin = $_POST["password"];

    
    $stmt = $conn->prepare("SELECT * FROM tb_user WHERE email = ?");
    $stmt->bind_param("s", $emaillogin);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
   $row = mysqli_fetch_assoc($result);
   
 
   if (password_verify($pwlogin, $row["password"])) {
   $_SESSION["login"] = true;
   $_SESSION["id"] = $row["id"];
   $_SESSION["email"] = $row["email"];
    header("Location: users.php");
    exit;
    } else {
    echo "<script>alert('Wrong password');</script>";
    }
    } else {
    echo "<script>alert('User is not registeered');</script>";

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="loginn.css">
</head>
<body>

<h2>Login</h2>

<form action="login.php" method="POST" class="box" style="color: rgb(148, 5, 5);">
  Email: <input type="text" name="email" required> <br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" name="submit" value="Login">
</form>

<br>
<a href="registration.php">Registration</a>

</body>
</html>
