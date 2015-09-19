		<?php 
			$posts = json_decode(file_get_contents('./data.json'), true);
			$array = array('title' => $_POST['title'], 'content' => $_POST['content'], 'date' => date('jS \of F - Y'));
			$posts['posts'][count($posts['posts'])] = $array;
			$json_output = json_encode($posts);
			$json_file = fopen('data.json', 'w');
			fwrite($json_file, $json_output);
			
			header("Location: admin.php");
			exit;
		?>