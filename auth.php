<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    // Hash the password securely using a modern hashing algorithm like bcrypt
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
    
    // Include the configuration file
    require_once 'config.php';

    // Establish a database connection
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check for connection errors
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    // Prepare and execute a parameterized query
    $stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `login` = ? AND `pass` = ?");
    $stmt->bind_param('ss', $login, $hashedPassword);
    $stmt->execute();

    // Check for query execution errors
    if ($stmt->errno) {
        echo "Query execution failed: " . $stmt->error;
        exit();
    }

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

    $stmt->close();
    $mysqli->close();
    header('Location: /activebox.com');
?>