<?php
    session_start();
    include("../../config/config.php");

    if (!$_SESSION['id']) {
        header("Location: ../../login.php");
    }

    $id = $_POST['id'];

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $divisiId = $_POST['divisiId'];
    $divisi = $_POST['divisi'];

    
    if (empty($nim) || empty($nama) || empty($email) || empty($fakultas) || empty($prodi) || empty($semester) || empty($divisiId) || empty($divisi)) {
        echo "<script>alert('Data harus diisi semua')</script>";
    } else {
        $updateQuery = "UPDATE member SET nim=?, nama=?, email=?, fakultas=?, study_program=?, semester=?, division_id=?, position=? WHERE id=?";
        $stmt = $mysqli->prepare($updateQuery);
        $stmt->bind_param("ssssssisi", $nim, $nama, $email, $fakultas, $prodi, $semester, $divisiId, $divisi, $id);

        if ($stmt->execute()) {
            header("Location: ../../index.php");
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    }
?>
