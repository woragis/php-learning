<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>MadLibs Page</title>
  </head>
	<body>
    <h1>MadLibs Game</h1>
    <form action="madlibs.php" method="post" >
      <label for="color1"><input type="text" name="color1" id="color1"> <br>
      <label for="color2"><input type="text" name="color2" id="color2"> <br>
      <label for="person1"><input type="text" name="person1" id="person1"> <br>
      <label for="person2"><input type="text" name="person2" id="person2"> <br>
      <label for="person3"><input type="text" name="person3" id="person3"> <br>
      <input type="submit" value="Complete MadLibs">
    </form>
    <h4>Complete the following:</h4>
    <?php
    $color1 = $_POST["color1"];
    $color2 = $_POST["color2"];
    $person1 = $_POST["person1"];
    $person2 = $_POST["person2"];
    $person3 = $_POST["person3"];
    ?>
    Roses are <?php echo $color1 ?> <br>
    Violets are <?php echo $color2 ?> <br>
    <?php echo $person1 ?> love me<br>
    Love <?php echo $person2 ?> love <?php echo $person3 ?> too <br>
	</body>
</html>