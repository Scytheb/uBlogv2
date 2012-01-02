<?php 
	require "/views/header.php"; 	
	require "/models/personal.php";
	/*----USABLE PARAMETERS FOR SHOW
	$id=;
	----these are default set---
	$sort='blogdate';
	$sortStyle='DESC';
	$ground=0;
	$ceiling=20;--------------------*/
	$id=2;//CURRENT_USER_ID
	if (!isset( $_POST[ 'title' ])||!isset( $_POST[ 'text' ] )){
		echo "<p>**Ένα νέο post χρειάζεται υποχρεωτικά τίτλο και κείμενο</p>";
	}
	else{
		$title = $_POST[ 'title' ];
		$text = $_POST[ 'text' ];
		insert_post($id,$title,$text);
	}
	//result is used in view for formatting
	$result=show_posts($id);
	require "/views/posting.php"; 
	require "/views/footer.php"; 
?>