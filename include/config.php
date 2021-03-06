<?php 
error_reporting(E_ALL & ~E_NOTICE);


####################################################################################
// Session
####################################################################################
session_start();



####################################################################################
// Load functions
####################################################################################
require('functions.php');

function autoloader($class) {
	include 'classes/'. $class . '.class.php';
}


spl_autoload_register('autoloader');



####################################################################################
// Load main view
####################################################################################
require 'templates/main.php';