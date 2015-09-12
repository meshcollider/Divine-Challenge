<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Register - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

      <!-- CSS -->
      <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>

	<?php include('_header.php'); ?>
	
	<div align="center">
		<p>Register for the Divine Challenge</p><br />
		<!-- show registration form, but only if we didn't submit already -->
		<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
		<form method="post" action="register.php" name="registerform">
			<label for="user_uid">Hackforums UID</label><br />
			<input id="user_uid" type="number" step="1" min="1" name="user_uid" required /><br />
			Make sure this is correct, you will need this to claim prizes and in case you forget your password<br /><br />

			<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label><br />
			<input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br /><br />

			<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label><br />
			<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br /><br />

			<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label><br />
			<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br /><br />

			<img src="tools/showCaptcha.php" alt="captcha" /><br />

			<label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
			<input type="text" name="captcha" required /><br /><br />

			<input type="submit" class="btn" name="register" value="<?php echo WORDING_REGISTER; ?>" />
		</form>
		<?php } ?>

		<br />
		<a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>

	</div>
		
	<?php include('_footer.php'); ?>
   </body>
</html>
