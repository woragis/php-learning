<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Functions Page</title>
  </head>
	<body>
    <h1>Functions Testing</h1>

    <h3>Test functions</h3>
    <?php
      function poop($name) {
        echo "$name pooped!! Ha Ha Ha Ha <br>";
      }

      poop("Israel");
      poop("Jezreel");
      poop("Jeferson cagou e fedeu");


      function greet($name, $age) {
        echo "Hello $name, you look older than $age (you're done for life bro) <br>";
      }

      greet("Jezreel", 13);
      greet("Jefferson", 17);
      greet("Nicolas", 16);
    ?>

    <hr>

    <h3>Return functions</h3>
    <?php
      function cube($number) {
        return $number * $number * $number;
      }
      echo cube(2);
      echo cube(3);
      echo cube(4);
      echo cube(5);
    ?>

	</body>
</html>