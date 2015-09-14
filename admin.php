<?php 
	require_once('auth.php');
?>
<html>
	<head>
		<title>shitty cms admin page</title>
		<link rel="stylesheet" href="shitty_cms_style.css">
		<script src="ckeditor/ckeditor.js"></script>
	</head>
	
	<body>
		<h1 class="heading">shitty cms admin title</h1>
		
		<div>
			<p>Create a new Post</p>
			<form id="create" action="create.php" method="post">
				<label for="title">Title</label>
				<input name="title" type="text"></input>
				<textarea name="content" id="content"></textarea>
				<script>CKEDITOR.replace( 'content' );</script>
				<input type="submit" value="Post"></input>
			</form>
		</div>
		<div>
			<p>Delete an old post</p>
			<?php
				$posts = json_decode(file_get_contents('./data.json'), true);
				print('
					<form action="delete.php" method="get">
						<select name="delpost">
				');
				for ($i = 0;$i <= count($posts['posts']) - 1;$i++) {
					print('<option value="' . $posts['posts'][$i]['title'] . '">' . $posts['posts'][$i]['title'] . '</option>');
				}
				print('
						</select>
						<input type="submit" value="Delete"></input>
					</form>
				');
			?>
		</div>
		
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>