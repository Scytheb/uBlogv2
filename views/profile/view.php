<div class="image" id="avatar">
	<img src="images/<?php echo "$user['image']" ?>" alt="Profile pic"/>
</div>

<div id="user_inf">
	<?php echo "<p>".$login['username']."</p><p>".$user['email']."</p>"?>
</div>

<div id="profile_inf">
		<ul class="list" id="profile">
			<li>Full Name: <?php echo $user['name']." ".$user['surname']?></li>
			<li>Location: <?php echo $user['location']?></li>
			<li>Occupation: <?php echo $user['occupation']?></li>
			<li>Interests: <?php echo $user['interests']?></li>
			<li>Website: <?php echo $user['website']?></li>
			<li>Posts: <?php echo $user['posts']?></li>
		</ul>
</div>