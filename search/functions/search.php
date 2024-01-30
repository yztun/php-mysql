<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['txtSearch']) && !empty($_POST['txtSearch'])) {

                $search = $_POST['txtSearch'];

                require_once "../Classes/Dbh.php";
                require_once "../Classes/Book.php";

                $searchData = new Book($search);
                $result = $searchData->searchBook();

                if (count($result) > 0) {

    ?>

                    <div class="container">
                        <div class="table">
                            <div class="header">ISBN</div>
                            <div class="header">Title</div>
                            <div class="header">Author</div>
                            <div class="header">Price</div>

    <?php

                    foreach ($result as $key ) {
                        echo "<div class='cell'>";
                        echo $key['ISBN'];
                        echo "</div>";
                        echo "<div class='cell'>";
                        echo $key['title'];
                        echo "</div>";
                        echo "<div class='cell'>";
                        echo $key['author'];
                        echo "</div>";
                        echo "<div class='cell'>";
                        echo $key['price'];
                        echo "</div>";
                    }

                    echo "</div>";
                        echo "</div>";

                } else {
                    echo "<div class='container'>";
                    echo "<span class='error'>There is no data!</span>";
                    echo "</div>";
                }
            } else {
                echo "<div class='container'>";
                echo "<span class='error'>Please enter the keyword!</span>";
                echo "</div>";
            }
        }
    ?>
</body>
</html>
