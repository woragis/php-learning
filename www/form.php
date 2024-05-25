<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Form Page</title>
  </head>
	<body>
    <h1>Form learning</h1>

    <h3>Test of saving variables in input even after sent to server</h3>
    <hr>

    <h4>Get method</h4>
    <form action="form.php" method="get" >
      <label for="name">Name: </label> <input type="text" name="name" id="name" value=<?php $_GET["name"]?>>
      <label for="age">Age: </label> <input type="text" name="age" id="age" value=<?php $_GET["age"] ?>>
      <input type="submit" value="Send name to server">
    </form>

    <h4>Post method</h4>
    <form action="form.php" method="post" >
      <label for="name">Name: </label> <input type="text" name="name" id="name" value=<?php $_POST["name"]?>>
      <label for="age">Age: </label> <input type="text" name="age" id="age" value=<?php $_POST["age"] ?>>
      <input type="submit" value="Send name to server">
    </form>

    <hr>
    <h3>Test of forms</h3>
    <hr>

    <form action="form.php" method="post" >
      <label for="name">Name: </label> <input type="text" name="name" id="name">
      <label for="age">Age: </label> <input type="text" name="age" id="age">
      <input type="submit" value="Send name to server">
    </form>

		your name is: <?php echo $_POST["name"]; ?> (post method)
    <br>

		your age is: <?php echo $_POST["age"]; ?> (post method)
    <br> <br> <br>

		your name is: <?php echo $_GET["name"]; ?> (get method)
    <br>

		your age is: <?php echo $_GET["age"]; ?>
    <br>

	</body>
</html>