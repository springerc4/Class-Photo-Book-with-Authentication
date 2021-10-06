<?php
require_once('auth.php');
session_start();
// if the user is not logged in, redirect them to the public page
if ($_SESSION['logged'] = false) {
    header('Location: index.php');
}
signout();

// use the following guidelines to create the function in auth.php
// redirect the user to the public page.