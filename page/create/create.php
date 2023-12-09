<?php
    session_start();
    include("../../config/config.php");

    if(!$_SESSION['id']){
        header("Location: ../../login.php");
    }


    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $divisiId = $_POST['divisiId'];
    $divisi = $_POST['divisi'];
    $password = md5($_POST['pass']);


    if (empty($nim) || empty($nama) || empty($email) || empty($fakultas) || empty($prodi) || empty($semester) || empty($divisiId) || empty($divisi) || empty($password)    ) {
        echo "<script>alert('Data harus diisi semua')</script>";
    }else {
        $insertQuery = "INSERT INTO member (nim, nama, email, fakultas, study_program, semester, division_id, position , password) VALUES ('$nim', '$nama', '$email', '$prodi', '$fakultas', '$semester', '$divisiId', '$divisi' , '$password')";
        mysqli_query($mysqli, $insertQuery);
        header("Location: ../../index.php");
    }


    