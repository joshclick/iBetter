<h1>The Wall of Bets</h1>
<a href="/ibetter/admin/index.php"> Make a Bet </a>


<?php foreach($bets as $bet) : ?>
	<article>
		<h2>
			<?= $bet['title']; ?>
		</h2>
		<div class="body">
			A bet between: <?= $bet['name1']; ?> and <?= $bet['name1']; ?> for $<?= $bet['amount']; ?> 
			<a href="single.php?id=<?= $bet['id']; ?>"> Edit </a>
		</div>
	</article>
<?php endforeach ?>