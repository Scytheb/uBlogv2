<?php
	//GET USERID HERE 
	//example id=3
	$id=2;
	$sort='blogdate';
	$sortStyle='DESC';
	$ground=0;
	$ceiling=20;
    /*LIMIT $ground, $ceiling
    ORDER BY
	$sort $sortStyle*/
	$result=mysql_query("
	SELECT 	* 
	FROM blog
	WHERE userid=$id
	ORDER BY blogdate DESC
	LIMIT 0,20
	");
	if(!$result) die(mysql_error());
?>