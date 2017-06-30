
<?php

	//$argument1 = $_GET['arg1'];
	//$argument2 = $_GET['arg2'];
	//echo $argument1;
	
	if(isset($_GET['arg1']) && $_GET['arg1'] != null) {

		switch($_GET['operation']) {
			case "add":
				$result = intval($_GET['arg1']) + intval($_GET['arg2']);
			break;
			case "sub":
				$result = intval($_GET['arg1']) - intval($_GET['arg2']);
			break;
			case "mul":
				$result = intval($_GET['arg1']) * intval($_GET['arg2']);
			break;
			case "div":
				$result = intval($_GET['arg1']) / intval($_GET['arg2']);
			break;

		}

		echo $result;
	} else {
		echo "No argument 1";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form action=>
		<input type="text" name="arg1" placeholder="Argument1" value="5">
		<select name="operation">
		 	<option value="add">Add</option>
		 	<option value="sub">Subract</option>
		 	<option value="mul">Multiply</option>
		 	<option value="div">Divide</option>
		</select>
		<input type="text" name="arg2" placeholder="argument2" value="5">
		<input type="submit" value="Calculate!">

	</form>


</body>
</html>