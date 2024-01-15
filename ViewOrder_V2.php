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

        <div class="tbl-order">
            <div class="header">Order Date</div>
            <div class="header">Tires</div>
            <div class="header">Oil</div>
            <div class="header">Spark Plugs</div>
            <div class="header">Total</div>
            <div class="header">Address</div>

        <?php
            $orders = file("$document_root/php-mysql/orders/orders.txt");
            $ordersCount = count($orders);

            if ($ordersCount == 0) {
                echo "<p><strong>No orders pending. <br/>
                        Please try again later.</strong></p>";
            }

            for ($i=0; $i<$ordersCount; $i++) {
                $columns = explode("\t", $orders[$i]);

                echo "<div class='cell'>";
                echo $columns[0];
                echo "</div>";

                echo "<div class='cell'>";
                echo intval($columns[1]);
                echo "</div>";

                echo "<div class='cell'>";
                echo intval($columns[2]);
                echo "</div>";

                echo "<div class='cell'>";
                echo intval($columns[3]);
                echo "</div>";

                echo "<div class='cell'>";
                echo $columns[4];
                echo "</div>";

                echo "<div class='cell'>";
                echo $columns[5];
                echo "</div>";
            }

        ?>

        </div>
    </div>
</body>
</html>
