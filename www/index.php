<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Home Page</title>
  </head>
	<body>
		<h1>Hi</h1>
		<?php 

 		// variables
	 	$characterName = "Jezreel Veloso";
		$characterAge = 20;
		echo "Hello $characterName!";
		echo "Woah you are $characterAge??? Already??";
	 	$characterName = "Mikael fa de CSGO";
		$characterAge = 25;
		echo "Hello $characterName!";
		echo "Woah $characterAge years??? Already??";

		// data types
		echo "Hello, World!"; // string
		echo 30; // int
		echo 30.1; // float
		echo true; // boolean

		// string methods
		echo strtolower($characterName); // make string chars go lower case
		echo strtoupper($characterName); // make string chars go upper case
		echo strlen($characterName); // get string length
		echo $characterName[0]; // accessing specific char
		echo str_replace(" ", "panda", $characterName); // relpace
		echo substr($characterName, 8, 3); // get substring

		// numbers
		echo 9+5;
		echo 10*2;
		echo 10/2;
		echo 5 + 4*10;
		echo (5 + 4)*10;
		$num = 5;
		$num = $num+25;
		$num += 25; $num -= 25; $num *= 25;	$num /= 25;
		echo 10%2;
		echo abs(-2);
		echo pow(2, 20);
		echo sqrt(144);
		echo max(10, 5);
		echo min(10, 5);
		echo round(3.5); echo round(3.7);	echo round(3.2);
		echo ceil(3.5);	echo ceil(3.7);	echo ceil(3.2);
		echo floor(3.5);	echo floor(3.7);	echo floor(3.2);

		?>

	</body>
</html>
