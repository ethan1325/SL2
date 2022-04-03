<?php
    session_start();
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
    <nav>
        <p>Aplikasi Pengelola Keuangan</p>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
        <p><a href="logout.php">Logout</a></p>
    </nav>
    <div class="wrapper flex">
        <p>Halo <?php echo $_SESSION['namaDepan'] . " " . $_SESSION['namaTengah'] . " " . $_SESSION['namaBelakang'] ?>, Selamat Datang di Aplikasi Pengelola Keuangan</p>
    </div>
</body>
</html>