<?php

include('inc/db.php');
include('inc/functions.php');

?>
<html>
<head>
	<title>ServerName Account</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon Loading -->
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	
	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/foundation.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/content.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors.css" media="screen" />
</head>
<body>

<div class="row">
	<div class="content">
		<div class="content-logo">
			ServerName
		</div>

		<div class="content-logo-sub">
			Create an account
		</div>

		<div class="content-box">
			<div class="content-box-content">
				<form method="POST">
					<input type="text" name="username" placeholder="Username" />

					<input type="text" name="email" placeholder="Email" />

					<input type="password" name="password" placeholder="Password" />

					<input type="password" name="re-password" placeholder="Retype Password" />

					<center>
						<div class="g-recaptcha" data-sitekey="<?php echo CAPTCHA_CLIENT_ID; ?>"></div>
						<br>
						<input type="submit" name="register" class="small button" value="Create a free account" />
					</center>
				</form>
			</div>
		</div>

		<div class="response">
			<?php Register(); ?>
		</div>
	</div>

	<div class="footer">
	Code and Layout by <a href="http://www.ac-web.org/forums/member.php?320223-M4ko">M4ko</a> | Re-Design by <a href="http://www.ac-web.org/forums/member.php?230904-OMGhixD">OMGhixD</a>
</div>

</div>

<!-- Javascript Files -->
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/what-input.js"></script>
<script type="text/javascript" src="js/vendor/foundation.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>