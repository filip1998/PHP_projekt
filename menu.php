<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">Home</a></li>
		<li><a href="index.php?menu=2">News</a></li>
		<li><a href="index.php?menu=6">Contact</a></li>
		<li><a href="index.php?menu=7">About</a></li>
		<li><a href="index.php?menu=11">Gallery</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=8">Register</a></li>
			<li><a href="index.php?menu=9">Sign In</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=10">Admin</a></li>
			<li><a href="signout.php">Sign Out</a></li>';
		}
		print '
	</ul>';
?>