<?php

	function show_posts($id,$sort='blogdate',$sortStyle='DESC',$ground=0,$ceiling=10){
	$result=mysql_query("
	SELECT 	* 
	FROM blog
	WHERE userid=$id
	ORDER BY $sort $sortStyle
	LIMIT $ground,$ceiling
	");
	if(!$result) die(mysql_error());
	return $result;
	}
	function insert_post($userid,$title,$text){
	$res=mysql_query("
	INSERT INTO blog
	(userid ,title ,stuff)
	VALUES ($userid,'$title','$text')
	");
	if(!$res) die(mysql_error());
	return $res;
	}
?>