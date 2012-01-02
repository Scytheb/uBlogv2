<?php 
	global $settings;
    $settings = require( '/settings.php' );
	require_once "/models/db.php";
	include "/models/blog.php";
	include "/views/header.php";
	

	if (isset($_GET['page'])) {
		$page=$_GET['page'];
		$blog=allBlogPosts($page*10-10, $page*10, 'blogdate');
	}
	else {
		$page=1;
		$ground=0;
		$ceiling=10;
		$blog=allBlogPosts($ground, $ceiling, 'blogdate');
	}
	
	include "/views/globalblogs/view.php";
	include "/views/footer.php";
	
?>