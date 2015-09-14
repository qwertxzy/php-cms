<html>
	<head>
		<link rel="stylesheet" href="shitty_cms_style.css">
		<title>shitty cms site</title>
	</head>
	
	<body>
		<?php 
			$posts = json_decode(file_get_contents('./data.json'), true);
			$array = array('title' => $_POST['title'], 'content' => $_POST['content']), 'date' => date('jS \of F - Y'));
			$posts['posts'][count($posts['posts'])] = $array;
			$json_output = json_encode($posts);
			$json_file = fopen('data.json', 'w');
			fwrite($json_file, $json_output);
		?>
		
		<h1>Your Post has been added.</h1>
		
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>