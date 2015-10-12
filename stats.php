<?php 
	require_once('config/config.php');
	
    $username = DB_USER; 
    $password = DB_PASS; 
    $host = DB_HOST; 
    $dbname = DB_NAME; 
	
    try 
    { 
        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database." . $ex); 
        echo "fail";
    } 
     
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  
     
	$numberRegistered = $db->query('select count(*) from users')->fetchColumn(); 

	$leaderboard = "";
	$maxChallengeID = 0;
	
	try 
	{ 
		$result = $db->query("SELECT user_name, user_hf_uid, user_current_challenge_id FROM users ORDER BY user_current_challenge_id DESC");
		$rank = 1;

		if ($result) {
			while ($row = $result->fetch()) {
				
				if($rank == 1) {
					$maxChallengeID = $row['user_current_challenge_id'];
				}
				
				$leaderboard .= "<tr><td>{$rank}</td>
					  <td>{$row['user_name']}</td>
					  <td>{$row['user_hf_uid']}</td>
					  <td>{$row['user_current_challenge_id']}</td></tr>";

				$rank++;
				if(rank > 10) break;
			}
		}
	} 

	catch(PDOException $ex) 
	{ 
		 die("Error getting leaderboard: " . $ex); 
	} 	
	
	$graphData = "";
	for ($i = 1; $i <= $maxChallengeID; $i++) {
		
		$result = $db->prepare("SELECT count(*) FROM users WHERE user_current_challenge_id = :cid"); 
		$result->bindParam(':cid', $i, PDO::PARAM_INT);
		$result->execute(); 
		$numberOfPeople = $result->fetchColumn(); 
		
		$graphData .= "{ probNum: '" . $i . "', curr: " . $numberOfPeople . " }";
		if($i < $maxChallengeID) $graphData .= ",";
	} 
		
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" /> 
		<title>Stats - Divine Challenge</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Divine Challenge Statistics">
		<meta name="author" content="Divine">

		<!-- CSS -->
		<link rel="stylesheet" href="css/style3.css">
		<link rel="stylesheet" href="css/morris.css">	
		<link rel="stylesheet" href="css/reset.css">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		
		<!-- JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type='text/javascript' src="js/raphael-min.js"></script>
		<script type='text/javascript' src="js/morris-modified.min.js"></script>
		<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
		<script type='text/javascript' src='js/jquery.particleground.min.js'></script>
		<script type='text/javascript' src='js/lol.js'></script>
			
    </head>
    <body>
	<div id="header">
		<div class="wrap">
			<h1>DIVINE CHALLENGE</h1>
		</div>
	</div>
	<div id="content">
		<p id="title">STATS</p>
		<div id="stats" style="height: 80%; width: 60%; margin: auto;"></div>
		<script>
			new Morris.Line({
			element: 'stats',
	
			data: [
				<?php echo $graphData; ?>
			],
	
			xkey: 'probNum',

			ykeys: ['curr'],

			labels: ['Curr']
			});
		</script>
		<div id="tableForm">
			<p style="font-size: 1.1em;">REGISTERED PARTICIPANTS: <?php echo $numberRegistered; ?></p>
			<div class="datagrid">
				<table>
					<tbody>
					<tr>
						<td>Rank</td>
						<td>User</td>
						<td>HF UID</td>
						<td>Challenge ID</td>
					</tr>
						<?php
							echo $leaderboard;
						?>
					</tbody>
				</table>
			</div>
		<div id="footer">
			<p class="alignLeft">Copyright (C) Divine 2015</p>
			<p class="alignRight"><a href="http://hackforums.net/showthread.php?tid=4990509">Support Thread</a></p>
			<div style="clear: both;"></div>
		</div>
	</div>
    </body>
</html>
