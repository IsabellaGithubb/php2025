<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php
  echo "hallooooooooooooooooooooooooo";
  $e = "katten";
  echo "ik hou van" . $eeee . "!";
  $skibidi = 500;
  $sigma = 400;
  echo $skibidi + $sigma;
  $x = "kittens";
  $u = 5;
  echo $x;
  echo $u;
  var_dump($u);
  $katten = array("kitten", "poezen", "katers");
echo count($katten);
echo $e;
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 6; $col++) {
      echo "<li>".$katten[$row][$col]."</li>";
    }
  echo "</ul>";
}
  
  
  ?>

</body>

</html>