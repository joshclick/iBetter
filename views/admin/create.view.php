<h1>Create a New Post</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" maxlength="50">
		</li>
		<li>
			<label for="name1">Person 1:</label>
			<input type="text" name="name1" id="name1" maxlength="20">
		</li>
		<li>
			<label for="name2">Person 2:</label>
			<input type="text" name="name2" id="name2" maxlength="20">
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