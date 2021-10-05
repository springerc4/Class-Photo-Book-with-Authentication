<?php
session_start();
// if the user is alreay signed in, redirect them to the members_page.php page
if ($_SESSION['logged']) {
	header('Location: members_page.php');
}
// use the following guidelines to create the function in auth.php
//instead of using "die", return a message that can be printed in the HTML page
if(count($_POST)>0){
	// 1. check if email and password have been submitted
	if (!isset($_POST['email']) || !isset($_POST['password'])) {

	}
	// 2. check if the email is well formatted
	else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

	}
	// 3. check if the password is well formatted

	// 4. check if the file containing banned users exists
	if (!file_exists('banned.csv.php')) {

	}
	// 5. check if the email has been banned
	if (contains('banned.csv.php', $_POST['email'])) {

	}
	// 6. check if the file containing users exists
	if (!file_exists('user.csv.php')) {

	}
	// 7. check if the email is registered
	if (!contains('users.csv.php', $_POST['email'])) {

	}
	// 8. check if the password is correct
	if (!contains('users.csv.php', $_POST['password'])) {

	}
	// 9. store session information
	$_SESSION['username'] = $_POST['email'];
	
	
	// 10. redirect the user to the members_page.php page
	header('Location')
	
	/*
	echo 'check email+password';
	if(true){
		$_SESSION['logged']=true;
		
	}else $_SESSION['logged']=false;
	*/
}

// improve the form
?>
<form method="POST">
	<input type="email" name="email" />
	<input type="password" name="password" />
	
	<input type="submit" value="submit" />
</form>
