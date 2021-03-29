<?php

$dbServer = 'db';
$dbName = 'app_db';
$dbUser = 'user';
$dbUserPass = 'user_pass';

try {
  $conn = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUser, $dbUserPass);
  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC ); 
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}