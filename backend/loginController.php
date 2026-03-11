<?php 
$password = $_POST['password'];
$username = $_POST['username'];

// Verbinding

require_once "conn.php";

$query = "SELECT * FROM users WHERE password = :password AND username = :username";
?>