<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Log In - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

		<!-- CSS -->
		<link rel="stylesheet" href="css/login.css">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
		<script type='text/javascript' src='js/jquery.particleground.min.js'></script>
		<script type='text/javascript' src='js/lol.js'></script>
		<script type="text/javascript">
			function submitForm() {
				document.getElementById('loginform').submit();
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

		<p>Please Login</p>
		<form method="post" action="panel" name="loginform" id="loginform" >
			<div id="login">
				<span class="fontawesome-user"></span><input type="text" required placeholder="Username" id="user_name" name="user_name" />
				<span class="fontawesome-lock"></span><input type="password" required placeholder="Password" id="user_password" name="user_password" autocomplete="off" />
			</div>
			<a href="javascript: submitForm()" class="btn" name="login">Login</a>
			<a href="index" class="btn">Go Back</a>
		</form>
		
	</div>
	<?php include('_footer.php'); ?>
	</div>
   </body>
</html>

