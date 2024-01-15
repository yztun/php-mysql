<?php

// $fileName = 'orders.txt';

$document_root = $_SERVER['DOCUMENT_ROOT'];

echo $document_root;

$fileName = "$document_root/php-mysql/orders/orders_with_line_no.txt";

$outputString = " writing sample " . "\n";

// $outputString = generateLineNo() . " writing sample " . "\n"
//             . generateLineNo() . " writing sample " . "\n"
//             . generateLineNo() . " writing sample " . "\n";

// echo 'os' . $outputString;

// $outputString = generateLineNo();

if (file_exists($fileName)) {
    @$f = fopen($fileName, 'ab');

    flock($f, LOCK_EX);

    fwrite($f, $outputString , strlen($outputString));
    flock($f, LOCK_UN);
    fclose($f);

    echo "<p>Order written.</p>";

}

function generateLineNo() {
    static $lineNo = 89;
    $lineNo ++;
    return $lineNo;
}