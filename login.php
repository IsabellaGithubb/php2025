<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="button container">
 <div class="login container">
<form class="box" style="color: rgb(148, 5, 5);"> 
<h2>Login</h2>
<label for="username">Username</label>
<input type="text" id="username" name="username" placeholder="Enter your username">
<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Enter your password">
<div class="button-container">
<button type="submit">Login</button>
</div>
</div>
</form>
</div>

<form action="welcome.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

  <?php
  
  
  ?>

</body>

</html>