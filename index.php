<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>	
	<head>
	<link rel="stylesheet" href="style.css">
	<title>Rogoznica</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Web stranica o Gradu Rogoznica">
	<meta name="keywords" content="html,css,home,news,gallery,contact,about">
	<meta name="author" content="Filip Mihić">
	<meta name="viewport" content="width=device-width, initial-scale=0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>
	<header>
		<div'; 
		if ($menu > 1) { print ' class="under"';} else { print ' class="under"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# News
	else if ($menu == 2) { include("news.php"); }

	# News1
	else if ($menu == 3) { include("news-1.php"); }

	# News2
	else if ($menu == 4) { include("news-2.php"); }

	# News3
	else if ($menu == 5) { include("news-3.php"); }
	
	# Contact
	else if ($menu == 6) { include("contact.php"); }
	
	# About us
	else if ($menu == 7) { include("about-us.php"); }

	# Gallery
	else if ($menu == 11) { include("gallery.php"); }
	
	# Register
	else if ($menu == 8) { include("register.php"); }
	
	# Signin
	else if ($menu == 9) { include("signin.php"); }
	
	# Admin webpage
	else if ($menu == 10) { include("admin.php"); }
	
	
	print '
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Filip Mihić</p>
	</footer>
</body>
</html>';
?>
