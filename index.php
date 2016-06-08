<?php
session_start();
// var_dump($_SESSION);
if(!isset($_SESSION['loggedin'])) {
	require('management/templates/login.php');
}elseif($_SESSION['loggedin'] == true){
	require 'include/config.php';
}



