<?php

class Signup extends Dbh
{
    public function __construct(private $userName, private $password)
    {
        
    }

    private function insertUser() {
        $query = "INSERT INTO users (username, password) VALUES
        (:username, :password);";

        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(':username', $this->userName);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    private function isEmptySubmit() 
    {
        if (isset($this->userName) && isset($this->password)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser()
    {
        if ($this->isEmptySubmit()) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }

        $this->insertUser();
    }
}