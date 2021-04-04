<?php

define('DB_HOST','db');
define('DB_NAME','app_db');
define('DB_USER','user');
define('DB_PASS','user_pass');

define('OPTIONS', array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
));

try
{
  $connection = new PDO( "mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, OPTIONS );
  echo "Connected successfully";
}
catch ( PDOException $e )
{
  echo "Connection failed: " . $e->getMessage();
}