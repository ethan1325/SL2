<?php
    session_start();
    if(!empty($_SESSION['errorMessage'])){
        $errorMessage = $_SESSION['errorMessage'];
        echo "<script>alert('$errorMessage')</script>"; 
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper flex">
        <h3>Login</h3>
    <form class="loginForm" action="loginProses.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><a class="backButton" href="index.php">Kembali</a></td>
                <td><input type="submit" class="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>