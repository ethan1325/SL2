<?php
    if(isset($_POST['submit'])){
        session_start();
        include("config.php");
        // $str_query = "SELECT * FROM user";
        $str_query = "SELECT * FROM user WHERE Username = '" . $_POST['username'] . "'";
        $query = mysqli_query($connection, $str_query);
        // // $data = mysqli_fetch_array($query);
        // while($data = mysqli_fetch_array($query)){
        //     echo $data['Username'] . "<br>";
        // }
        // echo $data['NamaDepan'];
        if(empty($_POST['username']) || empty($_POST['password'])){
            $_SESSION['errorMessage'] = "Please fill out every field!";
            header("location:login.php");
        }
        else if(mysqli_num_rows($query) == 1){
            $data = mysqli_fetch_array($query);
            if($_POST['password'] == $data['Password1'] || $_POST['password'] == $data['Password2']){
                $_SESSION['namaDepan'] = $data['NamaDepan'];
                $_SESSION['namaTengah'] = $data['NamaTengah'];
                $_SESSION['namaBelakang'] = $data['NamaBelakang'];
                $_SESSION['tempatLahir'] = $data['TempatLahir'];
                $_SESSION['tanggalLahir'] = $data['TanggalLahir'];
                $_SESSION['NIK'] = $data['NIK'];
                $_SESSION['wargaNegara'] = $data['WargaNegara'];
                $_SESSION['email'] = $data['Email'];
                $_SESSION['noHP'] = $data['NoHP'];
                $_SESSION['alamat'] = $data['Alamat'];
                $_SESSION['kodePos'] = $data['KodePos'];
                $_SESSION['fotoProfil'] = $data['FotoProfil'];
                $_SESSION['username'] = $data['Username'];
                $_SESSION['password1'] = $data['Password1'];
                $_SESSION['password2'] = $data['Password2'];
                header("location:home.php");
            }
            else{
                $_SESSION['errorMessage'] = "Wrong password, please try again.";
                header("location:login.php");
            }
        }
        else{
            $_SESSION['errorMessage'] = "Username does not exist!";
            header("location:login.php");
        }
        // if(isset($_POST['submit'])){
        //     if($_POST['username'] == $_SESSION['username'] && ($_POST['password'] == $_SESSION['password1'] || $POST_['password'] == $_SESSION['password2'])){
        //         header("location:home.php");
        //     }
        //     else{
        //         header("location:login.php");
        //     }
        // }
    }
?>