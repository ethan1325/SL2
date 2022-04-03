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
        <p><a href="index.php">Logout</a></p>
    </nav>
    <div class="wrapper flex">
        <p>Profil Pribadi</p>
        <table>
            <tr>
                <td>Nama Depan <b><?php echo $_SESSION['namaDepan'] ?></b></td>
                <td></td>
                <td>Nama Tengah <b><?php echo $_SESSION['namaTengah'] ?></b></td>
                <td></td>
                <td>Nama Belakang <b><?php echo $_SESSION['namaBelakang'] ?></b></td>
            </tr>
            <td></br></td>
            <tr>
                <td>Tempat Lahir <b><?php echo $_SESSION['tempatLahir'] ?></b></td>
                <td></td>
                <td>Tanggal Lahir <b><?php echo $_SESSION['tanggalLahir'] ?></b></td>
                <td></td>
                <td>NIK <b><?php echo $_SESSION['NIK'] ?></b></td>
            </tr>
            <td></br></td>
            <tr>
                <td>Warga Negara <b><?php echo $_SESSION['wargaNegara'] ?></b></td>
                <td></td>
                <td>Email <b><?php echo $_SESSION['email'] ?></b></td>
                <td></td>
                <td>No HP <b><?php echo $_SESSION['noHP'] ?></b></td>
            </tr>
            <td></br></td>
            <tr>
                <td>Alamat <b><?php echo $_SESSION['alamat'] ?></b></td>
                <td></td>
                <td>Kode Pos <b><?php echo $_SESSION['kodePos'] ?></b></td>
                <td></td>
                <td>Foto Profil</br><img src=<?php echo "images/" . $_SESSION['fotoProfil'] ?> alt=" " width="200px"></td>
            </tr>
            <td></br></td>
        </table>
        <a href="editProfile.php" class="button green">Edit Profile</a>
    </div>
</body>

</html>