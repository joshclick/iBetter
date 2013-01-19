<div id="betContainer" style="position: relative">

	<?php foreach ($bets as $bet) : ?>
	<a class="bet" href="single.php?id=<?= $bet['id']; ?>">
		<h3><span><?= $bet['team1']; ?> vs. <?= $bet['team2']; ?>: <?= $bet['name1']; ?> and <?= $bet['name2']; ?> for $<?= $bet['amount']; ?></span> </h3>
		<img width="<?= $bet['amount']; ?>" height="<?= $bet['amount']; ?>" src="http://images2.fanpop.com/image/photos/11500000/God-s-Beautiful-Landscape-god-the-creator-11543726-1024-768.jpg">
	</a>
	<?php endforeach ?>

		  
</div>