<?php
	
	require_once('models/user.php');
	//require_once('models/login.php');
	global $user
	$login=login($username, $password)
	$userid=$login['loginid'];
	
	$user = getProfileDetails($userid);
	
	include('views/header.php');
	include('views/profile/view.php');
	include('views/footer.php');

?>