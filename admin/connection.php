<?php 
	$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$db = "id_card_service_db";

	$link = new mysqli($mysql_host, $mysql_user, $mysql_password, $db);

	// Check connection
	if ($link->connect_error) {
    	die("Connection failed: " . $link->connect_error);
		}

 ?>