<?php 
	define("DB_HOST",'localhost');
	define("DB_USER",'root');
	define("DB_PASS",'640087@m');
	define("DB_NAME",'web');
	$dbcon=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if(!$dbcon){
		echo 'error connecting to database';
	}
	echo 'you have connected successfully';
?>

