<h1>The Blog</h1>

<?php foreach($bets as $bet) : ?>
	<article>
		<h2>
			<a href="single.php?id=<?= $bet['id']; ?>">
				<?= $bet['title']; ?>
			</a>
		</h2>
		<div class="body">
			<?= $bet['body']; ?>
		</div>
	</article>
<?php endforeach ?>