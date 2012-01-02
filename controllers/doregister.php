<?php
	global $settings;

    $settings = require( "../settings.php");
	require "../models/db.php";
    require "../models/user.php";

	$is=register($_POST['username'], $_POST['password'], $_POST['email']);
	
?>