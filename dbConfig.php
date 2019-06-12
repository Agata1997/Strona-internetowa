<?php
//Database credentials
$dbHost     = 'weddinglotjl.nazwa.pl:3306';
$dbUsername = 'weddinglotjl_Klienci';
$dbPassword = 'Ag@tka25';
$dbName     = 'weddinglotjl_Klienci';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>