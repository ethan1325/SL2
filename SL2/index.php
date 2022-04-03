<?php
    session_start();
    if(!empty($_SESSION['successMessage'])){
        $successMessage = $_SESSION['successMessage'];
        echo "<script>alert('$successMessage')</script>"; 
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
        <p>Aplikasi Pengelola Keuangan</p>
        <h3>Selamat Datang di Aplikasi Pengelola Keuangan</h3>
        <div class="buttonContainer">
            <a href="login.php" class="button blue">Login</a>
            <a href="register.php" class="button green">Register</a>
        </div>
    </div>
</body>

</html>