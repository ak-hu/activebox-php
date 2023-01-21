<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass."asvnmdfg92345");

	$mysql = new mysqli('localhost', 'admin', '12345', 'register-bd');


	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if(count($user) == 0){
		echo "The user does not exist";
		exit(0);
	}

	setcookie('user', $user['name'], time() + 3600, "/");


	$mysql->close();

	header('Location: /activebox.com');
?>