
<?php
session_start();
include("../../config/config.php");

if(!$_SESSION['id']){
    header("Location: ../../login.php");
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$members = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM member WHERE id = $id"));
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
    <ul class="nav">
      <li class="nav-item">
          <a href="logout.php" class="nav-link text-white">Logout</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="container d-flex flex-column justify-content-center align-items-center pt-4">
        <form class="w-50 shadow p-3 mb-5 rounded" method="POST" action="../update/update.php">
            <input name="id" value="<?= $members['id'] ?>" type="hidden">
            <div class="mb-3">
              <label  class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" value="<?= $members['nim'] ?>">
            </div>
            <div class="mb-3">
              <label  class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $members['nama'] ?>">
            </div>
            <div class="mb-3">
              <label  class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $members['email'] ?>">
            </div>
            <div class="mb-3">
              <label  class="form-label">Fakultas</label>
              <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?= $members['fakultas'] ?>">
            </div>
            <div class="mb-3">
              <label  class="form-label">Prodi</label>
              <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $members['study_program'] ?>">
            </div>
            <div class="mb-3">
              <label  class="form-label">Semester</label>
              <input type="text" class="form-control" id="semester" name="semester" value="<?= $members['semester'] ?>">
            </div>
            <div class="mb-3">
              <label  class="form-label">Divisi_id</label>
              <select id="divisiId" name="divisiId" class="form-select">
              <option <?= ($members['division_id'] == 1) ? 'selected' : '' ?>>1 - Front End</option>
                <option <?= ($members['division_id'] == 2) ? 'selected' : '' ?>>2 - Microsoft Office</option>
                <option <?= ($members['division_id'] == 3) ? 'selected' : '' ?>>3 - Backend</option>
              </select>
            </div>
            <div class="mb-3">
              <label  class="form-label">Divisi</label>
              <select id="divisi" name="divisi" class="form-select" ?>"> 
                <option <?= ($members['position'] == 'INTI') ? 'selected' : '' ?>>INTI</option>
                <option <?= ($members['position'] == 'SDM') ? 'selected' : '' ?>>SDM</option>
                <option <?= ($members['position'] == 'DIKLATBANG') ? 'selected' : '' ?>>DIKLATBANG</option>
                <option <?= ($members['position'] == 'INFOKOMAD') ? 'selected' : '' ?>>INFOKOMAD</option>
                <option <?= ($members['position'] == 'P2M') ? 'selected' : '' ?>>P2M</option>
                <option <?= ($members['position'] == 'DANUS dan HUMAS') ? 'selected' : '' ?>>DANUS dan HUMAS</option>
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Add member</button>
          </form>  
  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
