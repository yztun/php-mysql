<?php

// $filename = 'data.json';

// $data = file_get_contents($filename);
// header('Content-type:application/json;charset=utf-8');

// $data = [ "name"=> "John Doe", "occupation" => "gardener", "country" => "USA" ];

// header("Access-Control-Allow-Origin: *");

// echo json_encode($data);

// $search = $_POST['txtSearch'];

$search = $_REQUEST['q'];

// echo $search;

require_once "Dbh.php";
require_once "Book.php";

// $search = 'css';

$searchData = new Book($search);
$result = $searchData->searchBook();

if (count($result) > 0) {
	echo json_encode($result);
}