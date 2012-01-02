<h2>Your Blog!</h2>

<?php
	while($row = mysql_fetch_array($result)){
		$t0=$row['title'];
		$t1=$row['stuff'];
		$t2=$row['image'];
		$t3=$row['blogdate'];
		echo"<div class='post'>";
		echo "<h3>$t0</h3> <p class='date'>$t3</p>";
		if (file_exists($t2)) echo"<p><img src='$t2' /></p>";
		echo"
		<p>$t1</p>
		</div>
		";
	}
?>
<h3>New Post</h3>
<form method="post" action="models/doposting.php">

	<div>
        <input type="text" name="title" />
    </div>
    <div>
        <textarea name="text"></textarea>
    </div>
    <div>
        <input type="submit" value="Υποβολή" />
    </div>
	<div>
        <input type="hidden" name="page" value="doposting" />
    </div>
</form>
