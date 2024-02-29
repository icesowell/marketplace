<?php
// Конфигурация базы данных
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "categories";

// Подключение базы данных
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// проверка соединения 
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>