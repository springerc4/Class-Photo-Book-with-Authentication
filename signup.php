<?php
	session_start();
	require_once('auth.php');
	// if the user is alreay signed in, redirect them to the members_page.php page
	if ($_SESSION['logged'] == "true") {
		header('Location: index.php');
	}
	// use the following guidelines to create the function in auth.php
	// instead of using "die", return a message that can be printed in the HTML page
	// check if the fields are empty
	if(count($_POST)>0) {
		if (!isset($_POST['email'])) {
			die('Invalid: Please enter an email');
		}
		else if (!isset($_POST['password'])) {
			die('Invalid: Please enter a password');
		}
		else {
			echo signup($_POST['email'], $_POST['password']);
		}
	}

	// improve the form
?>
<form method="POST">
	<input type="email" name="email" />
	<input type="password" name="password" />
	
	<input type="submit" value="submit" />
</form>
