<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Map Page</title>
  </head>
	<body>
    <h1>Map or <strong>Associative Array</strong></h1>
    <?php
      $grades = array("Android 18"=>"Small boobs and angelic face", "Pam"=>"Big ass", "Bulma"=>"Big boobs and cute face");
      echo "Grades: $grades";
      echo "all characters: <br>";
      echo $grades["Android 18"]; echo $grades["Bulma"]; echo $grades["Pam"];
    ?>
    <hr>
    <h4>Which student do you want the grades?</h4>
    <form action="map_arr.php" method="post" >
      <p>Students:</p>
      <ul>
        <li>Android 18</li>
        <li>Bulma</li>
        <li>Pam</li>
      </ul>
      <label for="num1">Student: </label> <input type="text" name="student"> <br>
      <input type="submit" value="Search for student grades">
    </form>
    You searched for: <br>
    <?php echo $grades[$_POST["student"]]; ?>
    is that right?

	</body>
</html>