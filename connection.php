<?php

class DatabaseConnection {
  public function __construct() {
    try {
      $conn = new PDO("mysql:host=localhost;dbname=youarticles", "root", "");
      $conn->exec('SET NAMES "UTF8"');
      echo "khadija";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}
$databaseConnection = new DatabaseConnection();
?>
