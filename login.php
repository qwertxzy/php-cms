<?php
$password = null;
$config = json_decode(file_get_contents('./config.json'), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["password"])) {
        $password = $_POST["password"];
		if($password == $config['credentials']['password']) {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: admin.php');
        }
        else {
            header('Location: login.php');
        }
        
    }
	else {
        header('Location: login.php');
	}
}
?>
<html>
	<head>
		<title>shitty cms admin page</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	</head>
	
	<body>
		<form id="login" method="post">
			<label for="password">Password</label>
			<input id="password" name="password" type="password" required>                    
            <br />
            <input type="submit" value="Login">
		</form>
		
		<footer>
			<p class="left text">Made by <a class="no-link" href="http://www.twitter.com/qwertxzy">qwertxzy</a></p>
		</footer>
	</body>
</html>