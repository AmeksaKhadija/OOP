<?php

private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname= "youarticles";

public function __construct() {
try {
  $conn = new PDO("mysql:host=$servername;dbname=youarticles", $username, $password);
  $conn->exec('SET NAMES "UTF8"');
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
?>