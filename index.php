<?php 
	$posts = json_decode(file_get_contents('./data.json'), true);
	$config = json_decode(file_get_contents('./config.json'), true);
?>
<html>
	<head>
		<title><?php print($config['title']);?></title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	</head>
	
	<body>
		<h1 class="heading"><?php print($config['title']);?></h1>
		<div class="contentstuff">
			<?php	
				//display post at index
				function displayPost ($index) {		
					global $posts;
					global $config;
					print("
						<div class='card'>
							<div class='cardcontent'>
								<h4>" . $posts['posts'][$index]['title'] . "</h4>
								<p>" . $posts['posts'][$index]['content'] . "</p>
							</div>
							
							<div class='cardfooter'>
								<div class='minilogo'><img src='" . $config['logo'] . "'></div>
								<div class='cardinfo'>" . $config['name'] . "<br>" . $posts['posts'][$index]['date'] . "</div>
							</div>
						</div>
					");
				}
			
<<<<<<< HEAD
				for ($i = count($posts['posts']) - 1; $i >= 0; $i--) {
					displayPost($i);
				}
			?>
		</div>
		
=======
			//display post at index
			function displayPost ($index) {		
				global $posts;
				print("
					<div class='card'>
						<h1>" . $posts['posts'][$index]['title'] . "</h1>
						<p>" . $posts['posts'][$index]['content'] . "</p>
						<p>". $posts['posts'][$index]['date'] . "</p>
					</div>
				");
			}
			
			for ($i = count($posts['posts']) - 1; $i >= 0; $i--) {
				displayPost($i);
			}
		?>
>>>>>>> origin/master
		<footer>
			<div class="container">
				<span class="grey-text">Made by qwertxzy. CSS made by Noahz.</span>
			</div>
		</footer>
	</body>
</html>