<?php 
	session_start();
	include("connection.php");
	

	$id = $_GET['id'];
	$admin = $_SESSION["id"];
	$q = "UPDATE user SET `deleted_by`='$admin', `status`='deleted' WHERE id='$id';";
	$res = mysqli_query($link, $q);
	if ($res) {
		echo "<div id='alert' class='alert alert-success' role='alert'> Admin removed </div>";	
	}else{
		echo"<div id='alert' class='alert alert-danger' role='alert'> Error occurred, please try later!! </div>";
	}
?>