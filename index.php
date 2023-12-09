<?php
    session_start();
    include("config/config.php");
    if(!$_SESSION['id']) {
        header("Location: login.php");
    }


    $idMember = $_SESSION['id'];
    $sql = "select id from member where id = $idMember";
    $result = mysqli_query($mysqli, $sql);
    if($result->num_rows == 0 ){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title>CRUD | PHP</title>
</head>
<body>
<nav class="navbar py-0">
  <div class="container-fluid bg-dark py-2">
    <a class="navbar-brand text-light" href="#"> TahuNgoding
    </a>
  </div>

  <?php
  
  $members = mysqli_query($mysqli, "SELECT * FROM member");
  $rowNumber = 1;
  
  ?>

  <div class="container my-4">
  <button type="button" class="btn btn-success mb-2" onclick="location.href='page/create/index.php'"">Add New</button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Fakultas</th>
        <th scope="col">prodi</th>
        <th scope="col">Semester</th>
        <th scope="col">Divisi</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($members as $member) : ?>
        <tr>
            <td><?= $rowNumber++ ?></td>
            <td><?= $member['nim' ] ?></td>
            <td><?= $member['nama' ] ?></td>
            <td><?= $member['email' ] ?></td>
            <td><?= $member['fakultas' ] ?></td>
            <td><?= $member['study_program' ] ?></td>
            <td><?= $member['semester' ] ?></td>
            <td><?= $member['position' ] ?></td>
            <td>
            <button type="button" class="btn btn-success" onclick="location.href='page/update/index.php?id=<?= $member['id'] ?>'">Update</button>
            <button type="button" class="btn btn-danger" onclick="location.href='page/delete/delete.php?id=<?= $member['id'] ?>'" >Delete</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
  </div>


</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>