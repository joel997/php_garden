<?php

$host = '127.0.0.1';
$db_name   = 'travel_website';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$db = null;

try{
  $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
  $opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  $db = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}