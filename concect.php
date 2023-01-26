<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = ''; //Lab room 408 or 409 - 12345678
$dbname = 'hospital';
 
try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
        $userName,$userPassword
    );
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'You are now connecting to database!';
 
} catch (PDOException $e) {
    //echo 'Sorry! You cannot connect to database: ' . $e->getMessage();
}
?>