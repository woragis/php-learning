<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Form Page</title>
  </head>
	<body>
		<h1>Hi</h1>
    <form action="form.php" method="post" >
      <label for="name">Name: </label> <input type="text" name="name" id="name">
      <label for="age">Age: </label> <input type="text" name="age" id="age">
      <input type="submit" value="Send name to server">
    </form>
		your name is: <?php echo $_POST["name"]; ?> (post method)
    <br>
		your age is: <?php echo $_POST["age"]; ?> (post method)
    <br>
    <br>
    <br>
		your name is: <?php echo $_GET["name"]; ?> (get method)
    <br>
		your age is: <?php echo $_GET["age"]; ?>
    <br>
	</body>
</html>