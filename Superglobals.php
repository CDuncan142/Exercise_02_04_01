<!doctype html>

<html>

<head>
	<!--	
	author: Conner Duncan
	date: 09.25.18
	
	file: Superglobals.php
	
	
	-->
	<title>Superglobals</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
</head>

<body>
	<h1>Superglobals</h1>
	<?php
		echo "<h3>Superglobal Array \$_SERVER[]</h3>";
		echo "<p>The name of the current script is: ",
		$_SERVER["SCRIPT_NAME"], "<br />";
		
		echo "This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br />";
		echo "This script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br />";
		echo "This script was requested with the following server name: ", $_SERVER["SERVER_NAME"], "<br />";
		echo "This script was requested with the following server address: ", $_SERVER["SERVER_ADDR"], "<br />";
		echo "This script was requested with the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br />";
		echo "This script was requested with the following request method: ", $_SERVER["REQUEST_METHOD"], "<br />";
		
	?>
</body>

</html>
