<!DOCTYPE html>
<html lang="<?php echo $pageLanguage ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?></title>
  <meta name="description" content="<?php echo $description ?>">
  <?php
    // Page Description
    for ($i=0; $i < count($tags); $i++) {
    echo "<meta name='keywords' content='$tags[$i]'>";
    }
  ?>
</head>
<body>
  
</body>
</html>