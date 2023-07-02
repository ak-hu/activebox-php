<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	// Hash the password securely using a modern hashing algorithm like bcrypt
	$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

	$mysql = new mysqli('localhost', 'admin', '12345', 'register-bd');

	// Prepare and execute a parameterized query
	$stmt = $mysql->prepare("SELECT * FROM `users` WHERE `login` = ? AND `pass` = ?");
	$stmt->bind_param('ss', $login, $hashedPassword);
	$stmt->execute();

	// Fetch the result
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();

	if (!$user) {
		echo "The user does not exist";
		exit(0);
	}

	// Store user data in a session instead of a cookie
	session_start();
	$_SESSION['user'] = $user['name'];

	$mysql->close();
	header('Location: /activebox.com');
?>