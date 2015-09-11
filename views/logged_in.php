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

	<?php
	// if you need the user's information, just put them into the $_SESSION variable and output them here
		echo WORDING_YOU_ARE_LOGGED_IN_AS . htmlspecialchars($_SESSION['user_name']) . "<br />";
		echo "Your current challenge id is " . $login->user_current_challenge;
	?>

	<div>
	    <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
	</div>

	<?php include('_footer.php'); ?>
   </body>
</html>