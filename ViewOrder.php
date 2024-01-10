<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Orders</h2>

        <?php
            $fileName = "$document_root/php-mysql/orders/orders.txt";

            if (file_exists($fileName)) {
                @$fp = fopen($fileName, 'r');

                if ($fp) {
                    while (!feof($fp)) {
                        $order = fgets($fp);
                        echo "<p>" . htmlspecialchars($order) . "</p><hr>";
                    }

                }
            }
        ?>
    </div>
</body>
</html>
