<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Sneaky Tiki Productions</title>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<link href="tMain.css" rel='stylesheet' type="text/css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<img src="_images/Sneaky Tiki Productions Logo small.png" alt="Sneaky Tiki Productions Logo" />
				<div id="nav" class="clearfix">
					<ul>
						<li><a href="tContact.php" class="last">Contact Us!</a></li>
						<li><a href="tPortfolio.htm">Our Clients</a></li>
						<li><a href="tAbout.htm">Our Story</a></li>
						<li><a href="tIndex.htm">Home</a></li>
					</ul>
				</div><!-- #nav -->
			</div><!-- #header -->
			<div id="content">
				<?php 
				  $to = "david@sneakytikiproductions.com";
				  $name_field = $_POST['name'];
				  $subject = "Message From $name_field!";
				  $email_field = $_POST['email'];
				  $message = $_POST['message'];

				  $body = "From: $name_field\n e-mail: $email_field\n Message:\n $message";

				   mail($to, $subject, $body);

				  echo "<h1>Thanks for the message!</h1><p>David responds to his email twice daily and always within 24 hours."; 
				?>
			</div><!-- #content -->
		</div><!-- #wrapper -->
		<div id="footer">
			<p>&copy; 2010 Sneaky Tiki Productions. All Rights Reserved.</p>
		</div><!-- #footer -->
		<!-- Google Analytics
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-17439813-1']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<-->
	</body>
</html>

<!--
Before going live:
-update stylesheet ref
-update nav ref
-enable google analytics
-->