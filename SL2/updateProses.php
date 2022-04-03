<?php
    if(isset($_POST['submit'])){
        if (empty($_POST['namaDepan']) || empty($_POST['namaTengah']) || empty($_POST['namaBelakang']) || empty($_POST['tempatLahir']) || empty($_POST['tglLahir']) || empty($_POST['NIK']) || empty($_POST['wargaNegara']) || empty($_POST['email']) || empty($_POST['noHP']) || empty($_POST['alamat']) || empty($_POST['kodePos']) || empty($_FILES['fotoProfil']) || empty($_POST['username']) || empty($_POST['password1']) || empty($_POST['password2'])) {
            header("location:editProfile.php");
        }
        else{
            session_start();
            include("config.php");
            move_uploaded_file($_FILES['fotoProfil']['tmp_name'], "images/" . $_FILES['fotoProfil']['name']);
            $str_query = "UPDATE user SET NamaDepan ='".$_POST['namaDepan']."', NamaTengah ='".$_POST['namaTengah']."',NamaBelakang ='".$_POST['namaBelakang']."',TempatLahir ='".$_POST['tempatLahir']."',TanggalLahir ='".$_POST['tglLahir']."',NIK ='".$_POST['NIK']."',WargaNegara ='".$_POST['wargaNegara']."',Email ='".$_POST['email']."',NoHP ='".$_POST['noHP']."',Alamat ='".$_POST['alamat']."',KodePos ='".$_POST['kodePos']."',FotoProfil ='".$_FILES['fotoProfil']['name']."',Password1 ='".$_POST['password1']."',Password2 ='".$_POST['password2']."' WHERE Username = '".$_POST['username'] ."'";
            $query = mysqli_query($connection,$str_query);
            echo $str_query;
            if($query){
                $_SESSION['namaDepan'] = $_POST['namaDepan'];
                $_SESSION['namaTengah'] = $_POST['namaTengah'];
                $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
                $_SESSION['tempatLahir'] = $_POST['username'];
                $_SESSION['tanggalLahir'] = $_POST['tglLahir'];
                $_SESSION['NIK'] = $_POST['NIK'];
                $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['noHP'] = $_POST['noHP'];
                $_SESSION['alamat'] = $_POST['alamat'];
                $_SESSION['kodePos'] = $_POST['kodePos'];
                $_SESSION['fotoProfil'] = $_FILES['fotoProfil']['name'];
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password1'] = $_POST['password1'];
                $_SESSION['password2'] = $_POST['password2'];
            }
            header("location:profile.php");
        }
    }
?>
