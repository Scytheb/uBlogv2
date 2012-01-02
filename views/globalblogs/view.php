<div id="bloglist">
		<ul class="list" id="globalblogs">
			<?php 
				$j=0;
				for($i=0;$i<count($blog);$i++) {
					echo "<li><a href=\"userblog.php?userid=".$blog[$i]['userid']."\">".$blog[$i]['title']."</a></li>";
				}
				echo "</ul>";
				$j=$i+1;
				// IMPORTANT!! MUST FIX FIRST IF BY CHECKING ARRAY
				if (true) echo "<p><a href=index.php?redpage=globalblogs&page=".($page+1).">Next Page</a></p>"; 
				if ($page>1) echo "<p><a href=index.php?redpage=globalblogs&page=".($page-1).">Previous Page</a></p>"; ?>
</div>