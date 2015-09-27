<?php 

    $username = DB_USER; 
    $password = DB_PASS 
    $host = DB_HOST; 
    $dbname = DB_NAME; 

    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
     
    try 
    { 
        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database."); 
        echo "fail";
    } 
     
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
     
    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) 
    { 
        function undo_magic_quotes_gpc(&$array) 
        { 
            foreach($array as &$value) 
            { 
                if(is_array($value)) 
                { 
                    undo_magic_quotes_gpc($value); 
                } 
                else 
                { 
                    $value = stripslashes($value); 
                } 
            } 
        } 
     
        undo_magic_quotes_gpc($_POST); 
        undo_magic_quotes_gpc($_GET); 
        undo_magic_quotes_gpc($_COOKIE); 
    } 
     
    header('Content-Type: text/html; charset=utf-8'); 
     

		$query = " 
			SELECT 
				*
			FROM challenges
			WHERE
				challenge_id = :id
		"; 
		
		$query_params = array( 
			':id' => $_SESSION['current_challenge_id']
		); 				

		try 
			{ 

			$stmt = $db->prepare($query); 
			$result = $stmt->execute($query_params); 	} 
		
		catch(PDOException $ex) 
				{ 
			 die("Failed to run query"); 
		} 

while ($row = $stmt->fetch()) {
 $challengeText = $row['challenge_instructions'];
 $challengeID = $row['challenge_id'];
 $challengeAuthor = $row['challenge_author'];
}		
		
?>

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
	<?php include('_header.php'); ?>

	<div id="content">
		<p>Challenge Panel</p><br />
		<p style="margin-bottom: 26px;">Challenge number: <?php echo htmlspecialchars($_SESSION['current_challenge_id']) ?></p>
		<div class="box">
			<p id="boxTitle">Instructions:</p>
			<p><?php echo $challengeText ?></p>
		</div>
		<div id="answerForm">
			<p>Solution:</p>
			<input type="text" name="answer" class="textBox" value="">
			<input type="button" class="btn" value="SUBMIT">
		</div>
	</div>
	
	<br /><br />
	
	<div align="center">
		<?php echo WORDING_YOU_ARE_LOGGED_IN_AS . htmlspecialchars($_SESSION['user_name']) . "<br />"; ?>
		<a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
	</div>
	
	<?php include('_footer.php'); ?>
   </body>
</html>
