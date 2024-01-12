<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Freight Costs</title>
    <link rel="stylesheet" href="css/freight.css">
</head>
<body>
	<div class="container">
        <div class="table">
            <div class="header">Distance</div>
            <div class="measure">Km</div>
            <div class="header">Cost</div>
            <div class="measure">$</div>

    <?php
        $distance = 50;

        while ($distance < 250) {
        	echo "<div class='cell'>";
            echo $distance;
            echo "</div>";
            echo "<div class='cell'>";
            echo $distance / 10;
            echo "</div>";
            $distance += 50;
        }
    ?>

        </div>
    </div>

</body>
</html>