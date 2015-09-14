<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
		if($username == 'testuser' && $password == 'psswd') {
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
		<link rel="stylesheet" href="shitty_cms_style.css">
	</head>
	
	<body>
		<form id="login" method="post">
			<label for="username">Username</label>
			<input id="username" name="username" type="text" required>
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