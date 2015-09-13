<html>
	<head>
		<title>shitty cms title</title>
		<link rel="stylesheet" href="shitty_cms_style.css">
	</head>
		<?php 
			$posts = json_decode(file_get_contents('./data.json'), true);
			for ($i = 0;$i <= count($posts['posts']);$i++) {
				if ($posts['posts'][$i]['title'] == htmlspecialchars($_GET["delpost"])) {
					unset($posts['posts'][$i]);
					$json_output = json_encode($posts);
					$json_file = fopen('data.json', 'w');
					fwrite($json_file, $json_output);
					print('
						<h1>Your Blog post has been deleted.</h1>
					');
				}
			}
		?>
	<body>
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>