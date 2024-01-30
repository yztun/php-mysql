<?php

class Book extends Dbh 
{
    public function __construct(private $q)
    {

    }

    public function searchBook() {
    	$q = '%' . $this->q . '%';

        $query = "SELECT * FROM books WHERE title LIKE :q";

        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(':q', $q);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}