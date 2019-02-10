<?php
$name = $_REQUEST['text'];
$firstname = strtok($name, ' ');
	echo "First name:".$firstname;echo'<br>';

	$lastname = strstr($name, ' ');
	echo "Last name:".$lastname;
?>

