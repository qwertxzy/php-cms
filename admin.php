<?php 
	require_once('auth.php');
	$config = json_decode(file_get_contents('./config.json'), true);
?>
<html>
	<head>
		<title>Administration</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
	</head>
	
	<body>
		<h1 class="heading">Administration</h1>
		
		<div class="container" style="background: white">
			<h4>Create a new Post</h4>
			<form id="create" action="create.php" method="post">
				<label for="title">Title</label>
				<input name="title" type="text"></input>
				<textarea name="content" id="content"></textarea>
				<script>CKEDITOR.replace( 'content' );</script>
				<input type="submit" value="Post"></input>
			</form>
			
			<h4>Delete an old post</h4>
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
			
			<h4>Options</h4>
			<form action="options.php" method="post">
				<label for="label">Choose a nifty Title for your blog:</label>
				<input type="text" name="label" value="<?php print($config['title']); ?>"></input>
				<label for="name">What's your name?</label>
				<input type="text" name="name" value="<?php print($config['name']); ?>"></input>
				<label for="logo">Submit a Path to your Logo (URL or File Path)</label>
				<input type="text" name="logo" value="<?php print($config['logo']); ?>"></input>
				<label for="password"> Choose your Password</label>
				<input type="password" name="password" value="<?php print($config['credentials']['password']); ?>"></input>
				<br><input type="submit" value="Save">
			</form>
		</div>
	</body>
</html>