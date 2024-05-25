<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Calculator Page</title>
  </head>
	<body>
    <h1>What will your mom <small>problably</small> think of your grade</h1>
    <form action="switch.php" method="post" >
      <label for="num1">Grade: </label> <input type="text" name="grades"> <br>
      <input type="submit" value="Submit">
    </form>

    <?php
      $grades = $_POST["grades"];
      switch ($grades) {
        case "A":
          echo "You did amazing";
          break;
        case "B":
          echo "You did pretty good";
          break;
        case "C":
          echo "You did poorly";
          break;
        case "D":
          echo "You did very bad";
          break;
        case "F":
          echo "You failed";
          break;
        default:
          echo "Invalid Grade";
      }
    ?>

	</body>
</html>