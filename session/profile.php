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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
            <h2>Profile Page</h2>
            <div>
                <p>Your account details are below:</p>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><?= $_SESSION['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>admin.zoteacademy@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Contact Phone</td>
                        <td>09-785 885 000</td>
                    </tr>
                </table>
            </div>
        </div>
    <!-- </div> -->
</body>
</html>