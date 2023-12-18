

<?php

    class Connection {
      public $conn;

        private String $servename = "localhost";
        private String $username = "root";
        private String $password= "";
        private String $dbname = "youarticles";

        public function connect() {
          try{
            $conn = new PDO("mysql:host=$this->servename;dbname=$this->dbname", $this->username, $this->password );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            
            // echo "connected successfuly";
          } catch(PDOException $e) {
            ///echo "Connection failed: " . $e->getMessage();
          }
          return$conn;
        }
  }
  
  $obj = new Connection();
  $obj->connect();
?>