<?php
	setcookie('user', $user['name'], time() - 3600, "/", "", true, true);
	header('Location: /activebox.com');
?>