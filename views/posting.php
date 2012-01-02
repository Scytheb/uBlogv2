<div id="newpost">
<h3>New Post</h3>
<form method="post" action="index.php?redpage=conpost">

	<div>
		<label for='text'>Post Title</label>
        <input type="text" name="title" />
    </div>
    <div>
        <textarea rows="10" cols="120" name="text"></textarea>
    </div>
    <div>
        <input type="submit" value="Υποβολή" />
    </div>
</form>
</div>
<?php
	while($row = mysql_fetch_array($result)){
		$t0=$row['title'];
		$t1=substr($row['stuff'],0,150);
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
