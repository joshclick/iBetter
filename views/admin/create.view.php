<?php
$teams = array(
	'ne'		=> 'New England',
	'po'		=> 'Poop',
	'da'		=> 'Da Bomb'
	);
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
			<select name="team1">
			  <option value="volvo">Volvo</option>
			  <option value="saab">Saab</option>
			  <option value="mercedes">Mercedes</option>
			  <option value="audi">Audi</option>
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