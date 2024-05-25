<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Conditions Page</title>
  </head>
	<body>
    <h1>Conditions</h1>
    <h3>If statements</h3>
    <?php
      $isMale = true;
      $isTall = true;
      if ($isMale && $isTall) {
        echo "You are a tall male";
      } elseif ($isMale && !$isTall) {
        echo "You are a short king";
      } elseif (!$isMale && $isTall) {
        echo "You are a tall girl (<3 for tall girls)";
      } else {
        echo "You are a cute short girl";
      }
    ?>
	</body>
</html>