<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>For Loop page</title>
</head>
<body>
  <?php
    for ($i = 0; $i < 10; $i++) {
      echo "Position: $i <br>";
    }
    $friends = array("Israel", "Jefferson", "Nicolas", "Rafael");
    for ($i = 0; $i < count($friends); $i++) {
      echo $friends[$i];
      echo "<br>";
    }
  ?>
  
</body>
</html>