<?php

// add parameters
function signup(){
	// add the body of the function based on the guidelines of signup.php
	
}

// add parameters
function signin(){
	// add the body of the function based on the guidelines of signin.php
	if (!isset($_POST['email']) || !isset($_POST['password'])) {
		echo 'Email or Password is Invalid';
	}
	// 2. check if the email is well formatted
	else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo 'Email or Password is Invalid';
	}
	// 3. check if the password is well formatted
	else if (!preg_match('' ,$_POST['email']))
	// 4. check if the file containing banned users exists
	else if (!file_exists('banned.csv.php')) {
		echo 'Error';
	}
	// 5. check if the email has been banned
	else if (contains('banned.csv.php', $_POST['email'])) {
		echo 'Email or Password is Invalid';
	}
	// 6. check if the file containing users exists
	else if (!file_exists('user.csv.php')) {
		echo 'Error';
	}
	// 7. check if the email is registered
	else if (!contains('users.csv.php', $_POST['email'])) {
		echo 'User Not Found';
	}
	// 8. check if the password is correct
	else if (!contains('users.csv.php', $_POST['password'])) {
		echo 'Password is Invalid';
	}

}

function signout(){
	// add the body of the function based on the guidelines of signout.php
	
}

function is_logged(){
	// check if the user is logged
	//return true|false
}