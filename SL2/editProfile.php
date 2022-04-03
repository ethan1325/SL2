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
        <h3>Update Profile</h3>
        <form class="registerForm" action="updateProses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan" value="<?php echo $_SESSION['namaDepan'];?>"></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah" value="<?php echo $_SESSION['namaTengah'];?>"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" value="<?php echo $_SESSION['namaBelakang'];?>"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" value="<?php echo $_SESSION['tempatLahir'];?>"></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tglLahir" value="<?php echo $_SESSION['tanggalLahir'];?>"></td>
                    <td>NIK</td>
                    <td><input type="text" name="NIK" value="<?php echo $_SESSION['NIK'];?>"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara" value="<?php echo $_SESSION['wargaNegara'];?>"></td>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $_SESSION['email'];?>"></td>
                    <td>No HP</td>
                    <td><input type="text" name="noHP" value="<?php echo $_SESSION['noHP'];?>"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $_SESSION['alamat'];?>"></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos" value="<?php echo $_SESSION['kodePos'];?>"></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="fotoProfil" value="<?php echo $_SESSION['fotoProfil'];?>"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $_SESSION['username'];?>" readonly></td>
                    <td>Password 1</td>
                    <td><input type="password" name="password1" value="<?php echo $_SESSION['password1'];?>"></td>
                    <td>Password 2</td>
                    <td><input type="password" name="password2" value="<?php echo $_SESSION['password2'];?>"></td>
                </tr>
                <td></br></td>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="profile.php" class="backButton">Kembali</a></td>
                    <td><input type="submit" class="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>