<?php

// $fileName = 'orders.txt';

$document_root = $_SERVER['DOCUMENT_ROOT'];

$fileName = "$document_root/php-mysql/orders/orders.txt";

$outputString = "writing sample";

if (file_exists($fileName)) {
    @$f = fopen($fileName, 'ab');

    flock($f, LOCK_EX);

    fwrite($f, $outputString , strlen($outputString));
    flock($f, LOCK_UN);
    fclose($f);

    echo "<p>Order written.</p>";

}