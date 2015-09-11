<!-- Temporary filename -->
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Challlenge Panel - Divine Challenge</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Divine Challenge Panel">
      <meta name="author" content="Divine">

      <!-- CSS -->
      <link rel="stylesheet" href="../css/style1.css">
    </head>
    <body>
	<?php include('_header.php'); ?>
		<div id="content">
			<p style="margin-bottom: 26px;">Challenge number: <?php echo $login->user_current_challenge; ?></p>
			<div class="box">
				<p id="boxTitle">Instructions:</p>
				<p>INSTRUCTIONS	GO HERE. THIS WILL BE TAKEN FROM THE DATABASE</p>
			</div>
			<div id="answerForm">
				<p>Solution:</p>
				<input type="text" name="answer" class="textBox" value="">
				<input type="button" class="btn" value="SUBMIT">
			</div>
		</div>
	<?php include('_footer.php'); ?>
   </body>
</html>
