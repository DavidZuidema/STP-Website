<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Sneaky Tiki Productions</title>
		<link rel="stylesheet" href="_css/screen.css" type="text/css" media="screen, projection" />
		<!--[if lt IE 8]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection" /><![endif]-->
		<link rel="stylesheet" href="_css/styles.css" type="text/css" />
		<!-- JavaScript for delivering XHTML strict compliant links in new windows -->
		<script type="text/javascript" src="external.js"></script>
	</head>
	<body>
	<!-- #header -->
		<div id="header">
			<img src="_images/headerbg.png" class="bg" alt="header background" />
			<div class="container">
				<div class="span-24 last">
					<div class="span-5">
						<a href="index.htm"><img src="_images/logo.png" alt="logo" /></a>
					</div>
				<!-- #nav -->
					<div id="nav" class="span-16 prepend-3 last">
						<ul>
							<li><a href="contact.htm" class="end">Contact</a></li>
							<li><a href="portfolio.htm">Portfolio</a></li>
							<li><a href="process.htm">Our Process</a></li>
							<li><a href="about.htm">Our Story</a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
	<!-- #content -->	
		<div id="content">
			<img src="_images/contentbg.png" class="bg contact" alt="content background" />
			<div class="container">
				<div class="span-13 prepend-top">
					<?php 
					  $to = "david@sneakytikiproductions.com";
					  $name_field = $_POST['name'];
					  $subject = "Message From $name_field!";
					  $email_field = $_POST['email'];
					  $message = $_POST['message'];

					  $body = "From: $name_field\n e-mail: $email_field\n Message:\n $message";

					   mail($to, $subject, $body);

					  echo "<h3>Thanks for the message!</h3><h4>David responds to his email twice daily and always within 24 hours.</h4>"; 
					?>
					<h4><a href="index.htm">Home</a></h4>
				</div>
			</div>
		</div>
	<!-- footer -->
		<div id="footer">
			<div class="container">
				<ul class="span-3 pull-1">
					<li><a href="index.htm">Home</a></li>
					<li><a href="about.htm">Our Story</a></li>
					<li><a href="process.htm">Our Process</a></li>
					<li><a href="portfolio.htm">Portfolio</a></li>
					<li><a href="contact.htm">Contact</a></li>
				</ul>
				<ul class="span-3 prepend-6">
					<li>Stuff We Like:</li>
					<li><a href="http://www.vimeo.com" rel="external">Vimeo</a></li>
					<li><a href="http://sethgodin.typepad.com" rel="external">Seth Godin</a></li>
					<li><a href="http://blueprintcss.org" rel="external">Blueprint</a></li>
				</ul>
				<h6 class="span-4 prepend-8 last">&copy; 2010 Sneaky Tiki Productions</h6>
			</div>
		</div>
	</body>
</html>
<!-- Remember to Add Google Analytics -->