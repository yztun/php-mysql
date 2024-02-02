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

        // $result = [];

        // if (isset($_REQUEST['q'])) {
        //     // $result = ['success' => true];
        //     // $result['q'] = $_REQUEST['q'];
        // }

        // $result['data'] = ['userId' => '1', 'id' => '1', 'title' => 'sunt aut facere', 'body' => 'rerum est autem sunt rem eveniet architecto'];

        // // header('Content-Type: application/json');
        // header("Content-Security-Policy: default-src *; style-src 'self' 'unsafe-inline'; font-src 'self' data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' stackexchange.com");

        // echo json_encode($result);

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        //header("Content-Security-Policy: default-src *; style-src 'self' 'unsafe-inline'; font-src 'self' data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' stackexchange.com");

        header("Access-Control-Allow-Origin: *");

        echo '[' . json_encode($age) . ']';

    ?>

                   
</body>
</html>
