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
        <h3>Register</h3>
        <form class="registerForm" action="registerProses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan"></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir"></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tglLahir"></td>
                    <td>NIK</td>
                    <td><input type="text" name="NIK"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara"></td>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                    <td>No HP</td>
                    <td><input type="text" name="noHP"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos"></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="fotoProfil"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                    <td>Password 1</td>
                    <td><input type="password" name="password1"></td>
                    <td>Password 2</td>
                    <td><input type="password" name="password2"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="index.php" class="backButton">Kembali</a></td>
                    <td><input type="submit" class="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>