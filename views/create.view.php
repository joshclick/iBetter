<link rel="stylesheet" href="../style.css" type="text/css">
<?php
require 'sendgrid-php/SendGrid_loader.php';
$sendgrid = new SendGrid('pennApps', 'hackathon2013');


if (isset($_POST) && isset($_POST['name1'])) {
  $url = $_POST['url'];
  $mail = new SendGrid\Mail();
   $mail->addTo('ben.wagle@yahoo.com')->
          addTo('rocketshot6@yahoo.com')->
       setFrom('iBetter-Pools@venmo.com')->
       setSubject('Finalize your bet by posting the money!')->
       setHtml("<a href=$url>$url</a>");
	$sendgrid->web->send($mail);
}
	
$teams = array(
      'buf'                => 'Buffalo Bills',
      'nyj'                                => 'New York Jets',
      'ne'                                        => 'New England Patriots',
      'mia'                                => 'Miami Dolphins',
      'dal'                                => 'Dallas Cowboys',
      'wsh'                                => 'Washington Redskins',
      'nyg'                                => 'New York Giants',
      'phi'                                => 'Philadelphia Eagles',
      'den'                                => 'Denver Broncos',
      'kc'                                        => 'Kansas City Chiefs',
      'oak'                                => 'Oakland Raiders',
      'sd'                                        => 'San Diego Chargers',
      'ari'                                => 'Arizona Cardinals',
      'sf'                                        => 'San Francisco 49ers',
      'sea'                                => 'Seattle Seahawks',
      'stl'                                => 'Saint Louis Rams',
      'cin'                                => 'Cincinnati Bengals ',
      'pit'                                => 'Pittsburgh Steelers',
      'cle'                                => 'Cleveland Browns',
      'bal'                                => 'Baltimore Ravens',
      'chi'                                => 'Chicago Bears',
      'det'                                => 'Detroit Lions',
      'gb'                                        => 'Green Bay Packers',
      'min'                                => 'Minnesota Vikings',
      'hou'                                => 'Houston Texans',
      'ind'                                => 'Indianapolis Colts',
      'jac'                                => 'Jacksonville Jaguars',
      'ten'                                => 'Tennessee Titans',
      'atl'                                => 'Atlanta Falcons',
      'no'                                        => 'New Orleans Saints',
      'car'                                => 'Carolina Panthers',
      'tb'                                        => 'Tampa Bay Buccaneers');
?>

<h1>Start A New Bet</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="name1">Person 1:</label>
			<input type="text" name="name1" id="name1" maxlength="20">
		</li>
		<li>
			<label for="name2">Person 2:</label>
			<input type="text" name="name2" id="name2" maxlength="20">
		</li>
		<li>
			<label for="team1">Person 1's Team:</label>
			<select name="team1">
				<?php foreach($teams as $team => $teamName) : ?>
       			<option value = "<?=$team?>"><?=$teamName?></option>
				<?php endforeach ?>
			</select>
		</li>
		<li>
			<label for="team2">Person 2's Team:</label>
			<select name="team2">
				<?php foreach($teams as $team => $teamName) : ?>
       			<option value = "<?=$team?>"><?=$teamName?></option>
				<?php endforeach ?>
			</select>
		</li>
		<li>
			<label for="amount">Amount ($$):</label>
			<input type="text" name="amount" id="amount" maxlength="5">
		</li>
		<li>
		    <input type="hidden" name="url" id="url" value="" />
			<input type="submit" value="Create Post" onclick="updateUrl()">
		</li>
	</ul>

	<?php if ( isset($status) ) : ?>
	<p><?= $status ?></p>
	
	<?php endif ?>
	
	<script>
	
	function updateUrl() {
    	var payment= document.getElementById("amount").value;
	    var poolLink= "https://venmo.com?txn=Pay&recipients=iBetter-Pools&amount="+payment+"&note=put%20up%20the%20money"
	    document.getElementById("url").value = poolLink;
	}

	</script>

</form>

<a href="index.php">Go Back!</a>