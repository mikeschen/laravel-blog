<!DOCTYPE html>
	<title>My Blog</title>
	<link rel="stylesheet" href="/styles.css">
	<body>
		<article>
			<h1><?= $post->title; ?></h1>

			<div>
				<?= $post->body; ?>
			</div>
		</article>
	</body>
</html>
