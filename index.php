<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
header("Location: login.php");
exit;
}
 require 'config.php';
$id = $_SESSION["id"];

$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Welcome <?php echo $row["name"];?></h1>
  <a href = "logout.php">Logout</a>
</body>
</html>
