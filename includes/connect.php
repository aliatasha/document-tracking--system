<?php
	$dbhost = "us-cdbr-east-03.cleardb.com"; //Host
	$dbuser = "b1efb14225fcf0"; //Database user
	$dbpass = "0c4df2ef"; //Database password
	$dbname = "heroku_d6af60c381bc17f"; //Database name
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //Connection
	mysqli_set_charset($conn,"utf8"); //UTF-8 for Turkish letters
?>
