<?php
require_once "Register.php";

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
    $conn = new PDO("mysql:host=localhost;dbname=registrations", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





