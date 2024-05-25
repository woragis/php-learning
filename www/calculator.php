<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Calculator Page</title>
  </head>
	<body>
    <h1>Calculator</h1>
    <form action="calculator.php" method="post" >
      <label for="num1">Number 1: </label> <input type="text" name="num1" id="num1">
      <label for="num1">Number 2: </label> <input type="text" name="num2" id="num2">
      <input type="submit" value="Sum numbers">
    </form>
    <h4>Sum of <?php echo $_POST["num1"] ?> and <?php echo $_POST["num2"] ?> is <?php echo $_POST["num1"] + $_POST["num2"] ?></h4>

	</body>
</html>