<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Array Page</title>
  </head>
	<body>
    <h1>Array</h1>
    <?php
      $friends = array("Israel", "Jefferson", "Nicolas");
      echo $friends; // display entire array
      echo $friends[0]; // display specific item in the array
      echo $friends[1]; // display specific item in the array
      $friends[3] = "Meu pai";
      $friends[4] = "Minha mae";
      echo count($friends);
    ?>

	</body>
</html>