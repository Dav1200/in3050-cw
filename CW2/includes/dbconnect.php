<?php
function db_connect()
{
  // Define static connection variable, avoids connecting more than once 
  static $connection;

  // Check is database connection exists, if not connected
  if (!isset($connection)) {
    // Load configuration as an array from .ini file
    //please pick the correct path if you cant put private in www use the second path
    $path1 = 'private/cred.ini';
    $path2 = '../../private/cred.ini';


    $config = parse_ini_file($path1);



    $connection = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
  }

  // If connection was not successful, throw exception error
  if ($connection->connect_errno) {
    throw new RuntimeException('mysqli connection error: ' . $connection->connect_error);
  }
  return $connection;
}
?>