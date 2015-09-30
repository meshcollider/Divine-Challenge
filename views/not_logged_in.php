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
		<p>Please Login</p><br />
		<form method="post" action="index.php" name="loginform">
			<label for="user_name"><?php echo WORDING_USERNAME; ?></label><br />
			<input id="user_name" type="text" name="user_name" required /><br /><br />
			<label for="user_password"><?php echo WORDING_PASSWORD; ?></label><br />
			<input id="user_password" type="password" name="user_password" autocomplete="off" required /><br /><br />
			<input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
			<label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label><br /><br />
			<input type="submit" class="btn" name="login" value="<?php echo WORDING_LOGIN; ?>" />
		</form>
		
		<br />
		<a href="register"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
	</div>
	<?php include('_footer.php'); ?>
   </body>
</html>

