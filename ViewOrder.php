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
            $orders = file("$document_root/php-mysql/orders/orders.txt");
            $ordersCount = count($orders);

            if ($ordersCount == 0) {
                echo "<p><strong>No orders pending. <br/>
                        Please try again later.</strong></p>";
            }

            for ($i=0; $i<$ordersCount; $i++) {
                echo $orders[$i] . "<br/>";
            }

        ?>
    </div>
</body>
</html>
