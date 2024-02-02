<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container-search">
        <form action="functions/fetch.php?q=css" method="post" class="formSearch">
            <div class="search">
                <input class="searchTerm" type="text" name="txtSearch" placeholder="Enter Keywords?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</body>
</html>