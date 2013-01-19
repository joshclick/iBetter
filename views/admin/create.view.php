<?php
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
      'sf'                                 => 'San Francisco 49ers',
      'sea'                                => 'Seattle Seahawks',
      'stl'                                => 'Saint Louis Rams',
      'cin'                                => 'Cincinnati Bengals ',
      'pit'                                => 'Pittsburgh Steelers',
      'cle'                                => 'Cleveland Browns',
      'bal'                                => 'Baltimore Ravens',
      'chi'                                => 'Chicago Bears',
      'det'                                => 'Detroit Lions',
      'gb'								   => 'Green Bay Packers',
      'min'                                => 'Minnesota Vikings',
      'hou'                                => 'Houston Texans',
      'ind'                                => 'Indianapolis Colts',
      'jac'                                => 'Jacksonville Jaguars',
      'ten'                                => 'Tennessee Titans',
      'atl'                                => 'Atlanta Falcons',
      'no'                                 => 'New Orleans Saints',
      'car'                                => 'Carolina Panthers',
      'tb'                                 => 'Tampa Bay Buccaneers');
?>

<h1>Create a New Post</h1>
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
			<select name="team2">
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
			<input type="submit" value="Create Post">
		</li>
	</ul>

	<?php if ( isset($status) ) : ?>
	<p><?= $status ?></p>
	<?php endif ?>

</form>

<a href="../index.php">Go Back!</a>