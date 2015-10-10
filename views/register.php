<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Register - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

      <!-- CSS -->
      <link rel="stylesheet" href="css/register.css">
	    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
		<script type='text/javascript' src='js/jquery.particleground.min.js'></script>
		<script type='text/javascript' src='js/lol.js'></script>
		<script type="text/javascript">
			function submitForm() {
				document.getElementById('registerform').submit();
			}
		</script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    </head>
    <body>

	
<div id="particles">
	<div class="intro">
	<?php include('_header.php'); ?>
		<p>Register for the Divine Challenge</p>
		<!-- show registration form, but only if we didn't submit already -->
		<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
		<form method="post" action="register.php" name="registerform" id="registerform">
			<div id="register">
				<span class="fontawesome-user"></span><input type="text" required pattern="[a-zA-Z0-9]{2,64}" placeholder="Username" id="user_name" name="user_name" class="username" />
				<input type="number" step="1" min="1" required placeholder="HF UID" id="user_uid" name="user_uid" class="HFUID" />
				<span class="fontawesome-lock"></span><input type="password" required pattern=".{6,}" placeholder="Password" id="user_password" name="user_password" autocomplete="off" class="pass" /> 
				<input type="password" required pattern=".{6,}" placeholder="Repeat Password" id="user_password_repeat" name="user_password_repeat" class="pass_repeat" autocomplete="off" />
				
				<img src="tools/showCaptcha.php" alt="captcha" /><br />
				<input type="text" name="captcha" class="captcha" placeholder="Captcha" required />
			</div>

			<a href="javascript: submitForm()" class="btn" name="register">Register</a>
			<a href="index" class="btn">Go Back</a>
		</form>
		<?php } ?>

	</div>
</div>		
	<?php include('_footer.php'); ?>
   </body>
</html>
