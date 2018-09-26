<!doctype html>

<html>

<head>
	<!--	
	author: Conner Duncan
	date: 09.25.18
	
	file: ProcessScholarship2.php
	-->
	<title>Process Scholarship 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
</head>

<body>
	<h2>Process Scholarship 2</h2>
	<?php
		//global variables
		$errorCount = 0;
		
		//Function to outputs error message relative to the error
		function displayRequired($fieldName) {
			echo "The field \"$fieldName\" is required.<br />\n ";
		}
		
		//function to validate the recieved information
		function validateInput($data, $fieldName) {
			global $errorCount;
			if (empty($data)) {
				displayRequired($fieldName);
				$errorCount++;
				$retval = "";
			}
			else {
			$retval = trim($data);
			$retval = stripslashes($retval);
			}
			return $retval;
		}
	
		function redisplayForm($firstName, $lastName){
		?>
		<!-- Scholarship Form -->
		<h2 style="text-align: center">Scholarship Form Two</h2>
		<form name="scholarship" action="ProcessScholarship2.php" method="post">
			<p>First name:
				<input type="text" name="fName" value="<?php echo $firstName; ?>" />
			</p>
			<p>Last name:
				<input type="text" name="lName" value="<?php echo $lastName; ?>" />
			</p>
			<p>
				<input type="reset" value="Clear Form" />&nbsp;&nbsp;
				<input type="submit" value="Send Form" />
			</p>
		</form>
		<?php
		}
		
		$firstName = validateInput($_POST["fName"], "First Name");
		$lastName = validateInput($_POST["lName"], "Last Name");
		if ($errorCount > 0) {
			echo "$errorCount errors: Please re-enter the information below.<br />\n";
			redisplayForm($firstName, $lastName);
		} else {
		echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
		}
	?>
</body>

</html>
