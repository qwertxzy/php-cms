<html>
	<head>
		<title>Leo's Blog</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	</head>
	
	<body>
		<h1 class="heading">Leo's Blog</h1>
		<div class="contentstuff">
			<?php 
			$posts = json_decode(file_get_contents('./data.json'), true);	
				//display post at index
				function displayPost ($index) {		
					global $posts;
					print("
						<div class='card'>
							<div class='cardcontent'>
								<h4>" . $posts['posts'][$index]['title'] . "</h4>
								<p>" . $posts['posts'][$index]['content'] . "</p>
							</div>
							
							<div class='cardfooter'>
								<div class='minilogo'></div>
								<div class='cardinfo'>Leo<br>" . $posts['posts'][$index]['date'] . "</div>
							</div>
						</div>
					");
				}
			
				for ($i = count($posts['posts']) - 1; $i >= 0; $i--) {
					displayPost($i);
				}
			?>
		</div>
		
		<div class="footer">
			<div class="container">
				<span class="grey-text">Made by Qwertxzy. CSS made by Noahz.</span>
			</div>
		</div>
	</body>
</html>