<?php
session_start();
error_reporting(0);
$dbHost = 'localhost';
$dbName = 'sem5';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>