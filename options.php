<?php
	$config = json_decode(file_get_contents('./config.json'), true);
	$config['title'] = $_POST['label'];
	$config['name'] = $_POST['name'];
	$config['logo'] = $_POST['logo'];
	$config['credentials']['password'] = $_POST['password'];
	
	$config_output = json_encode($config);
	$config_file = fopen('config.json', 'w');
	fwrite($config_file, $config_output);
	
	header("Location: admin.php");
	exit;
?>