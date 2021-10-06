<?php
require_once('functions.php');
// add parameters
function signup($email, $password) {
	// add the body of the function based on the guidelines of signup.php
	// check if the email is valid
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return 'Error: Invalid Email or Password';
	}
	// check if password length is between 8 and 16 characters
	else if(strlen($password)<8 || strlen($password) > 16) {
		return 'Invalid: Password must be between 8 and 16 characters';
	}
	// check if the password contains at least 2 special characters
	else if (!preg_match('/[!@#$%^&*(),.?":{}|<>]{2,}/', $password)) {
		return 'Password is Invalid. Please Check Formatting Guidelines';
	}
	// check if the file containing banned users exists
	else if (!file_exists('banned.txt')) {
		return 'Internal Error. Please Try Again Later';
	}
	// check if the email has not been banned
	else if (contains('banned.txt', $email)) {
		return 'Invalid Email or Password';
	}
	// check if the file containing users exists
	else if (!file_exists('users.txt')) {
		return 'Internal Error: Please Try Again Later';
	}
	// check if the email is in the database already
	else if (contains('users.txt', $email)) {
		echo 'Email Already Registered';
		return '<a href="signin.php">Sign in?</a>';
	}
	// encrypt password
	// save the user in the database 
	else {
		$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
		$array = array($email, $encrypted_password);
		$handle = fopen('users.txt', 'a+');
		fputcsv($handle, $array, ';');
		fclose($handle);
		header('Location: signin.php');
	}
	//show them a success message and redirect them to the sign in page
}

// add parameters
function signin($email, $password){
	// add the body of the function based on the guidelines of signin.php
	$signedIn = false;
	if (!isset($_POST['email']) || !isset($_POST['password'])) {
		return 'Email or Password is Invalid';
	}
	// 2. check if the email is well formatted
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return 'Email or Password is Invalid';
	}
	// 3. check if the password is well formatted
	else if (!preg_match('' , $password)) {
		return 'Email or Password is Invalid';
	}
	// 4. check if the file containing banned users exists
	else if (!file_exists('banned.txt')) {
		return 'Error';
	}
	// 5. check if the email has been banned
	else if (contains('banned.txt', $email)) {
		return 'Email or Password is Invalid';
	}
	// 6. check if the file containing users exists
	else if (!file_exists('users.txt')) {
		return 'Error';
	}
	// 7. check if the email is registered
	else if (!contains('users.txt', $email)) {
		return 'User Not Found';
	}
	// 8. check if the password is correct
	else if (!passwordMatch('users.txt', $password)) {
		return 'Password is Invalid';
	}
	else {
		$signedIn = true;
		return $signedIn;
	}
}

function signout(){
	// add the body of the function based on the guidelines of signout.php
	$_SESSION['logged'] = false;
	session_destroy();
	header('Location: index.php');
}

function is_logged(){
	if ($_SESSION['logged'] = true) {
		return true;
	}
	else return false;
}