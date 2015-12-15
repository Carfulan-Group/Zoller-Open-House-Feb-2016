<?php 
$url = "http://localhost/event/";
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="<?php echo $meta; ?>">
<link rel="stylesheet" href="<?php echo $url; ?>assets/stylesheets/main.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="http://192.168.10.49:35729/livereload.js?snipver=1"></script>   
</head>
<body>

<header>
<a class="logo" href="http://zoller-uk.com" target="_blank">
	<img src="<?php echo $url; ?>assets/images/zoller-uk-logo.png" alt="Zoller UK Logo">
</a>
<?php 
include "slider.php";
?>
</header>
<main class="container">
<div class="social-links">
	<a href="https://www.instagram.com/zolleruk/" target="_blank" title="Instagram">
		<i class="icon-instagram"></i>
	</a>
	<a href="https://twitter.com/ZollerUK" target="_blank" title="Twitter">
		<i class="icon-twitter"></i>
	</a>
	<a href="" target="_blank" title="Facebook">
		<i class="icon-facebook-squared"></i>
	</a>
		<a href="" target="_blank" title="LinkedIn">
		<i class="icon-linkedin"></i>
	</a>
		<a href="" target="_blank" title="Youtube">
		<i class="icon-youtube-play"></i>
	</a>
</div>