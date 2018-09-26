<!doctype html>

<html>

<head>
	<!--	
	author: Conner Duncan
	date: 09.25.18
	
	file: ProcessScholarship.php
	-->
	<title>Process Scholarship</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
</head>

<body>
	<h2>Process Scholarship</h2>
	<?php
		//global variables
		$firstName = stripslashes($_POST["fName"]);
		$lastName = stripslashes($_POST["lName"]);
			
		//output result
		echo "Thank you for filling out the scholarship form " . $firstName . " " . $lastName . ".";
		
	?>
</body>

</html>
