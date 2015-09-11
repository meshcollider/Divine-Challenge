<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Panel - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

      <!-- CSS -->
      <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
	<div id="header">
		<p>Welcome to the</p>
		<h1>DIVINE CHALLENGE</h1>
	</div>

	<?php include('_header.php'); ?>
	<p>Please Login</p><br />
	<form method="post" action="index.php" name="loginform">
	    <label for="user_name"><?php echo WORDING_USERNAME; ?></label>
	    <input id="user_name" type="text" name="user_name" required />
	    <label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
	    <input id="user_password" type="password" name="user_password" autocomplete="off" required />
	    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
	    <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
	    <input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
	</form>

	<a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>

	<?php include('_footer.php'); ?>
   </body>
</html>

