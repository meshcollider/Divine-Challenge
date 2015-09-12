<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Log In - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

      <!-- CSS -->
      <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>

	<?php include('_header.php'); ?>
	
	<div align="center">
		<!-- show registration form, but only if we didn't submit already -->
		<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
		<form method="post" action="register.php" name="registerform">
			<label for="user_uid">Hackforums UID</label>
			<input id="user_uid" type="number" step="1" min="1" name="user_uid" required /><br />

			<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
			<input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br />

			<label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
			<input id="user_email" type="email" name="user_email" required /><br />

			<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
			<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br />

			<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
			<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br />

			<img src="tools/showCaptcha.php" alt="captcha" /><br />

			<label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
			<input type="text" name="captcha" required /><br />

			<input type="submit" class="btn" name="register" value="<?php echo WORDING_REGISTER; ?>" />
		</form>
		<?php } ?>

			<a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>

	</div>
		
	<?php include('_footer.php'); ?>
   </body>
</html>
