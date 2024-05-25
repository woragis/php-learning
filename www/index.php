<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <meta name="description" content="Page about discovering new php possibilities and use for templates and DRY code writing">
  <link rel="stylesheet" src="styles.css">
  <style>
    nav.navbar {
      ul {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row; gap: 30px;
      }
      li {
        list-style-type: none;
        border: 1px solid black;
}
    }
  </style>
</head>
<?php 
  // nav variables
  $pageLanguage = "en";
  $pageTitle = "Home Page";
  $description = "Page about discovering new php possibilities and use for templates and DRY code writing";
  $tags = array("php", "include", "template", "functionalities");
?>
	<body>
    <?php include "nav.php" ?>
		<h1>Home Page</h1>
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
