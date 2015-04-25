<?php
$host = "localhost";
$dbname = "loto";
$username = "root";
$password = "";

$pdo = new PDO(
    "mysql:host=" . $host . ";dbname=" . $dbname . ";",
    $username,
    $password
);
