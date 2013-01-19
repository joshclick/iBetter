<?php foreach ($bets as $bet) : ?>
<a class="betBox" href="single.php?id=<?= $bet['id']; ?>">
	<h3><span><?= $bet['team1']; ?> vs. <?= $bet['team2']; ?>: <?= $bet['name1']; ?> and <?= $bet['name2']; ?> for $<?= $bet['amount']; ?></span> </h3>

	<?php 

	$size = 250;
	$sizeH = 250;

	if ($bet['amount'] < 49) {
	} elseif ($bet['amount'] < 50) {
		$size = 300;
		$sizeH = 300;
	} elseif ($bet['amount'] < 100) {
		$size = 400;
		$sizeH = 350;
	} elseif ($bet['amount'] < 200) {
		$size = 450;
		$sizeH = 350;
	}

	?>

	<img width="<?= $size ?>" height="<?= $sizeH ?>" src="http://www.homeplateheroes.com/Light%20Gray%20Suede.jpg">
</a>

<?php endforeach ?>
