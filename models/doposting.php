<?php 

	global $settings;
    $settings = require( "../settings.php");
	require "../models/db.php";
	
  $title = $_POST[ 'title' ];
	if(!isset( $_POST[ 'title' ] ) ){
		die("no title post");
    }
	$text = $_POST[ 'text' ];
	if(!isset( $_POST[ 'text' ] ) ){
		die("no text post");
    }

	$res=mysql_query("
	INSERT INTO blog
	(userid ,title ,stuff)
	VALUES (2,'$title','$text')
	");
	if(!$res) die(mysql_error());
?>