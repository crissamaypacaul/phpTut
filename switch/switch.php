<!DOCTYPE html>
<html>
<head>	
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="userName" placeholder="Enter UserName Here">
	<input type="submit" name="submit" value="Submit">
</form>	

<br><br>
<?php
	

	
$userName = $_POST['userName'];

switch ($userName) {	
	case "Van":
		echo "Hi ". $userName ."Welcome to the system!";
		break;	
	case "JK":
		echo "Hi ". $userName ."!";
		break;	
	case "Dan":
		echo "Hi ". $userName ."!";
		break;
	case "Jason":
		echo "Hi ". $userName ."!";
		break;

	default:
		echo "Unknown User! Please Register...";
		break;
}
?>
</body>
</html>

