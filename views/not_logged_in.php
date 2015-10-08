<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Log In - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

      <!-- CSS -->
      <link rel="stylesheet" href="css/reset.css">
	  <link rel="stylesheet" href="css/style3.css">
	  	    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
		<script type='text/javascript' src='js/jquery.particleground.min.js'></script>
		<script type='text/javascript' src='js/lol.js'></script>
		<script type="text/javascript">
			function submitForm() {
				document.getElementById('loginform').submit();
			}
		</script>
    </head>
    <body>

<div id="particles">
  <div class="intro">
	<?php include('_header.php'); ?>
	

		<p>Please Login</p><br />
		<form method="post" action="panel" name="loginform" id="loginform" >
			<label for="user_name"><?php echo WORDING_USERNAME; ?></label><br />
			<input id="user_name" type="text" name="user_name" required /><br /><br />
			<label for="user_password"><?php echo WORDING_PASSWORD; ?></label><br />
			<input id="user_password" type="password" name="user_password" autocomplete="off" required /><br /><br />
			<a href="javascript: submitForm()" class="btn" name="login"><?php echo WORDING_LOGIN; ?></div>
		</form>
		
		<br />
		<a href="register"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
	</div>
	<?php include('_footer.php'); ?>
	</div>
   </body>
</html>

