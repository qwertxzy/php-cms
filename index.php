<html>
	<head>
		<title>shitty cms title</title>
		<link rel="stylesheet" href="shitty_cms_style.css">
	</head>
	
	<body>
		<h1 class="heading">shitty cms heading</h1>
		<?php 
			$posts = json_decode(file_get_contents('./data.json'), true);
			
			//display post at index
			function displayPost ($index) {		
				global $posts;
				print("
					<div class='card'>
						<h1>" . $posts['posts'][$index]['title'] . "</h1>
						<p>" . $posts['posts'][$index]['content'] . "</p>
					</div>
				");
			}
			
			for ($i = count($posts['posts']) - 1; $i >= 0; $i--) {
				displayPost($i);
			}
		?>
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>