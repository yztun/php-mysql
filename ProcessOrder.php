<?php 
    // create short variable name
    $tires = 0;
    $oil = 0;
    $spark = 0;

    if (isset($_POST['txtTires']) && !empty($_POST['txtTires'])) {
        $tires = (int) $_POST['txtTires'];
    }

    if (isset($_POST['txtOil']) && !empty($_POST['txtOil'])) {
        $oil = (int) $_POST['txtOil'];
    }

    if (isset($_POST['txtSpark']) && !empty($_POST['txtSpark'])) {
        $spark = (int) $_POST['txtSpark'];
    }

    if (isset($_POST['txtAddress']) && !empty($_POST['txtAddress'])) {
        $address = preg_replace('/\t|\R/', ' ', $_POST['txtAddress']);
    }

    
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $date = date('H:i, j F Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bob's auto parts - order results</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container order">
        <h1 class="heading">bob's auto parts</h1>
        <h2 class="heading">Order Results</h2>

        <div class="result">

        <?php 
            echo "<p>order processed at: </p>"; 
            echo "<span class='date'>";
            echo $date. "</span><br/><br/>";


            $totalQty = 0;
            $totalQty = $tires + $oil + $spark;
            echo "<p class='small-heading'>item ordered: </p> ";
            echo "<span class='number'>" . $totalQty ."</span><br/>";

            if ($totalQty == 0) {
                echo "<p class='error'>";
                echo 'You did not order anything on the previous page!';
                echo '</p>';
                exit();
            } else {
                echo '<p>your order is as follows: </p>';
                echo '<p>';

                if ($tires > 0)
                    echo htmlspecialchars($tires). ' tires<br/> ';

                if ($oil > 0)
                    echo htmlspecialchars($oil). ' bottles of oil<br/> ';

                if ($spark > 0)
                    echo htmlspecialchars($spark). ' spark plugs<br/>';
                
                echo '</p>';
            }

            $totalAmt = 0.00;

            const TIRE_PRICE = 100;
            const OIL_PRICE = 10;
            const SPARK_PRICE = 4;

            $totalAmt = $tires * TIRE_PRICE
                    + $oil * OIL_PRICE
                    + $spark * SPARK_PRICE;

            echo "Subtotal: ";
            echo "<span class='number'> $". number_format($totalAmt, 2) . "</span><br/>";

            $taxRate = 0.10;        // local sales tax is 10%
            $totalAmt = $totalAmt * (1 + $taxRate);
            echo "<span class='small-heading' >total including tax: </span>";

            echo "<span class='number'> $". number_format($totalAmt, 2) . "</span>";

            echo "<p>Address to ship is : ".htmlspecialchars($address). "</p>";

            // $outputString = "\n<<< Start Order \n" . $date."\t". $tires . " tires, \t " 
            //                           . $oil . " oil,\t "
            //                           . $spark . " spark plugs,\t\$ "
            //                           . $totalAmt . ",\t" . $address . "\nEnd Order >>> \n";

            $outputString = $date."\t". $tires . " tires \t " 
                                      . $oil . " oil\t "
                                      . $spark . " spark plugs\t\$ "
                                      . $totalAmt . "\t" . $address . "\n" ;

            $fileName = "$document_root/php-mysql/orders/orders.txt";

            if (file_exists($fileName)) {
                @$fp = fopen($fileName, 'ab');

                flock($fp, LOCK_EX);

                fwrite($fp, $outputString, strlen($outputString));
                flock($fp, LOCK_UN);
                fclose($fp);

                echo "<p>Order written.</p>";
            } else {
                echo "<p><strong> Your order could not be processed at this time.
                      Please try again later!</strong></p>";
                exit;
            }
        ?>
        </div>
    </div>
</body>
</html>