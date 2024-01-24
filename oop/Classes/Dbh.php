<?php

 class Dbh 
 {
    private $host = "localhost";
    private $dbName = "oop";
    private $userName = "root";
    private $password = "goodfuture";

    protected function connect()
    {

    try {
            $conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->userName, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
