<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Conditions Page</title>
  </head>
	<body>
    <h1>Conditions</h1>
    <h3>Calculator</h3>
    <form action="complex_calculator.php" method="post" >
      <label for="number1">Number 1: </label> <input type="number" step="0.1" name="number1" id="number1"> <br>
      <label for="number1">Number 2: </label> <input type="number" step="0.1" name="number2" id="number2"> <br>
      <label for="operator">Operator: </label> <input type="text" name="operator" id="operator"> <br>
      <input type="submit" value="Calculate">
    </form>
    <?php
      $number1 = $_POST["number1"];
      $number2 = $_POST["number2"];
      $operator = $_POST["operator"];
      if ($operator == "+") {
        echo $number1 + $number2;
      }
      elseif ($operator == "-") {
        echo $number1 - $number2;
      }
      elseif ($operator == "*") {
        echo $number1 * $number2;
      }
      elseif ($operator == "/") {
        echo $number1 / $number2;
      } else {
        echo "Invalid Operator";
      }
    ?>
	</body>
</html>
