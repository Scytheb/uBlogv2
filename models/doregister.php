<?php
	//include ("../models/user.php");
	$is=register($_POST['username'], $_POST['password'], $_POST['email']);
	echo "$is";
?>