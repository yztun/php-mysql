<?php

$document_root = $_SERVER['DOCUMENT_ROOT'];

$fileName = "$document_root/php-mysql/orders/orders.txt";

if (file_exists($fileName)) {
    @$f = fopen($fileName, 'r');

    if ($f) {
        while (!feof($f)) {
            $order = fgets($f);
            echo htmlspecialchars($order) . "<br/>";
        }
    }

}
