<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>While Loop page</title>
</head>
<body>
  <?php
    $index = 0;
    while ($index < 5) {
      $index++;
      echo "$index <br>";
    }
    do {
      echo "Hi my name is optimus prime!";
      $index++;
    } while ($index < 6)
  ?>
  
</body>
</html>