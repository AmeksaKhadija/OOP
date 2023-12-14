<?php

    class Connexion {

        private String $servename;
        private String $username;
        private String $password;
        private String $dbname;
        private PDO $conn;

        protected function connect() {
            $this->servename = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "youarticles";
            $this->conn = new PDO($this->servename , $this->username , $this->password , $this->dbname);
            return $this->conn;
        }
    }
    
?>