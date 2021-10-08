<?php
	session_start();
	require_once('auth.php');
	require_once('functions.php');
	// if the user is alreay signed in, redirect them to the members_page.php page
	if ($_SESSION['logged'] == "true") {
		header('Location: index.php');
	}
	// use the following guidelines to create the function in auth.php
	//instead of using "die", return a message that can be printed in the HTML page
	if(count($_POST)>0) {
		$email_input = $_POST['email'];
		$password_input = $_POST['password'];
		// 9. store session information
		if (signin($email_input, $password_input)) {
			$_SESSION['logged'] = "true";
			header('Location: index.php');
		}
		else $_SESSION['logged'] = "false";
		
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
