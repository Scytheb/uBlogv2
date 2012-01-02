<?php
		
		if (!isset($_POST['username'])||!isset($_POST['password'])||!isset($_POST['email'])) {
		include "views/header.php";
		include "views/register/view.php";
		include "views/footer.php";
		}
		else {
			register($_POST['username'], $_POST['password'], $_POST['email']);
			header('Location: index.php?redpage=globalblogs');
		}			
?>