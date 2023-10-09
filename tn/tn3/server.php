<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array();
// connect to the database

 $dbhost = "localhost";
 $dbuser = "yllagimi_yllagim";
 $dbpass = "Testing1234!";
 $dbase = "yllagimi_santi.registration";
 $db = new mysqli($dbhost, $dbuser, $dbpass,$dbase) or die("Connect failed: %s\n". $db -> error);

   
?>

