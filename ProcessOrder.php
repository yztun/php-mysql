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
            echo date('H:i, j F Y'). "</span><br/><br/>";
        ?>

        <?php
            $tires = 0;
            $oil = 0;
            $spark = 0;

            if (isset($_POST['txtTires']) && !empty($_POST['txtTires'])) {
                $tires = $_POST['txtTires'];
            }

            if (isset($_POST['txtOil']) && !empty($_POST['txtOil'])) {
                $oil = $_POST['txtOil'];
            }

            if (isset($_POST['txtSpark']) && !empty($_POST['txtSpark'])) {
                $spark = $_POST['txtSpark'];
            }

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

        ?>
        </div>
    </div>
</body>
</html>