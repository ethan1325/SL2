<?php
    if (isset($_POST['submit'])) {
        session_start();
        include("config.php");
        $errorFlag = false;
        if (empty($_POST['namaDepan']) || empty($_POST['namaTengah']) || empty($_POST['namaBelakang']) || empty($_POST['tempatLahir']) || empty($_POST['tglLahir']) || empty($_POST['NIK']) || empty($_POST['wargaNegara']) || empty($_POST['email']) || empty($_POST['noHP']) || empty($_POST['alamat']) || empty($_POST['kodePos']) || empty($_FILES['fotoProfil']) || empty($_POST['username']) || empty($_POST['password1']) || empty($_POST['password2'])) {
            $_SESSION['errorMessage'] = 'Please fill out every field!';
            $errorFlag = true;
        }
        $str_query = "SELECT * FROM user WHERE Username = '" . $_POST['username'] . "'";
        $query = mysqli_query($connection, $str_query);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['errorMessage'] = 'Username already exists!';
            $errorFlag = true;
        }
        if ($errorFlag == false) {
            move_uploaded_file($_FILES['fotoProfil']['tmp_name'], "images/" . $_FILES['fotoProfil']['name']);
            $str_query1 = "INSERT INTO user VALUES ('" . $_POST['username'] . "','" . $_POST['namaDepan'] . "','" . $_POST['namaTengah'] . "','" . $_POST['namaBelakang'] . "','" . $_POST['tempatLahir'] . "','" . $_POST['tglLahir'] . "','" . $_POST['NIK'] . "','" . $_POST['wargaNegara'] . "','" . $_POST['email'] . "','" . $_POST['noHP'] . "','" . $_POST['alamat'] . "','" . $_POST['kodePos'] . "','" . $_FILES['fotoProfil']['name'] . "','" . $_POST['password1'] . "','" . $_POST['password2'] . "')";
            $query1 = mysqli_query($connection, $str_query1);
            if ($query1) {
                $_SESSION['successMessage'] = "Register Success!";
            }
            header("location:index.php");
        } else {
            header("location: register.php");
        }

        // if (!empty($_POST['namaDepan']) && !empty($_POST['namaTengah']) && !empty($_POST['namaBelakang']) && !empty($_POST['tempatLahir']) && !empty($_POST['tglLahir']) && !empty($_POST['NIK']) && !empty($_POST['wargaNegara']) && !empty($_POST['email']) && !empty($_POST['noHP']) && !empty($_POST['alamat']) && !empty($_POST['kodePos']) && !empty($_FILES['fotoProfil']) && !empty($_POST['username']) && !empty($_POST['password1']) && !empty($_POST['password2'])) {
        // $_SESSION['namaDepan'] = $_POST['namaDepan'];
        // $_SESSION['namaTengah'] = $_POST['namaTengah'];
        // $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
        // $_SESSION['tempatLahir'] = $_POST['username'];
        // $_SESSION['tanggalLahir'] = $_POST['tglLahir'];
        // $_SESSION['NIK'] = $_POST['NIK'];
        // $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
        // $_SESSION['email'] = $_POST['email'];
        // $_SESSION['noHP'] = $_POST['noHP'];
        // $_SESSION['alamat'] = $_POST['alamat'];
        // $_SESSION['kodePos'] = $_POST['kodePos'];
        // $_SESSION['username'] = $_POST['username'];
        // $_SESSION['password1'] = $_POST['password1'];
        // $_SESSION['password2'] = $_POST['password2'];
        //     move_uploaded_file($_FILES['fotoProfil']['tmp_name'], "images/"."profilez.png");
        //     header("location:index.php");
        // } else {
        //     header("location:register.php");
        // }
    }
?>
