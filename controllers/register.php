<?php
		
		if (!isset($_POST['username'])||!isset($_POST['password'])||!isset($_POST['email'])) {
			include "views/header.php";
			include "views/register/view.php";
			include "views/footer.php";
		}
		else {
			include "../views/header.php";
			global $settings;
			$settings = require( '../settings.php' );
			require "../models/db.php";
			require "../models/user.php";
			register($_POST['username'], $_POST['password'], $_POST['email']);
			header('Location: globalblogs.php');
			include "../views/footer.php";
		}			
?>