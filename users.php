<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Games; met SQL prepared statement en partial</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Welcome!!:D<?php echo isset($_SESSION["name"]) ? " " . htmlspecialchars($_SESSION["name"]) : ""; ?></h1>
  <a href="logout.php">Logout</a>

  <table>
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Password</th>
      <th>Deleteknop</th>
    </tr>

    <?php
    $conn = require_once "partials/dbconnection.php";

    $stmt = $conn->prepare("SELECT * FROM tb_user");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
      echo "<tr></tr>";
    }

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td><a href='details.php?id=" . $row['id'] . "'>" . $row['id'] . "</a></td>";
      echo "<td>" . htmlspecialchars($row['email']) . "</td>";
      echo "<td>verborgenpasswordhaha</td>";
      echo "<td>
  <form method='POST' action='delete.php' onsubmit=\"return confirm('Delete this user?');\">
  <input type='hidden' name='id' value='" . $row['id'] . "'>
  <button type='submit'>Delete</button>
  </form>
  </td>";
  echo "<tr></tr>";
 }
    ?>
  </table>
</body>
</html>
