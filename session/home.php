<?php 
 
 session_start();

 if (!isset($_SESSION['loggedin'])) {
     header('Location: index.html');
     exit;
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="loggedin">
    <!-- <div class="loggedin"> -->
        <nav class="navtop">
            <div>
                <h1><a href="home.php">Zote Academy</a></h1>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        <div class="content">
            <h2>Home Page</h2>
            <p>Welcome back, <?= $_SESSION['name'] ?>!</p>
        </div>
    <!-- </div> -->
</body>
</html>