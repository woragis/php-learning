<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Checkbox Page</title>
  </head>
	<body>
    <h1>Checkbox</h1>

    <h3>Preferences</h3>

    <h4>Mode array on name</h4>

    <form action="calculator.php" method="post" >
      <label for="apple">Apple: </label> <input type="text" name="fruits[]" value="apple" id="apple"> <br>
      <label for="orange">Orange: </label> <input type="text" name="fruits[]" value="orange" id="orange"> <br>
      <label for="lemon">lemon: </label> <input type="text" name="fruits[]" value="lemon" id="lemon"> <br>
      <input type="submit" value="Sum numbers">
    </form>

    <?php
      $fruits = $_POST["fruits"];
      echo "Fruits: $fruits";
      echo "Fruit 1: $fruits[0]";
      echo "Fruit 2: $fruits[1]";
      echo "Fruit 3: $fruits[2]";
    ?>
    <hr>

    <h4>Mode default name</h4>

    <form action="calculator.php" method="post" >
      <label for="apple">Apple: </label> <input type="text" name="fruits" value="apple" id="apple"> <br>
      <label for="orange">Orange: </label> <input type="text" name="fruits" value="orange" id="orange"> <br>
      <label for="lemon">lemon: </label> <input type="text" name="fruits" value="lemon" id="lemon"> <br>
      <input type="submit" value="Sum numbers">
    </form>

    <?php
      $fruits = $_POST["fruits"];
      echo "Fruits: $fruits";
      echo "Fruit 1: $fruits[0]";
      echo "Fruit 2: $fruits[1]";
      echo "Fruit 3: $fruits[2]";
    ?>
    <hr>

	</body>
</html>