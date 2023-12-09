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

  <div class="container d-flex flex-column justify-content-center align-item-start pt-4">
        <form class="w-50 shadow p-3 mb-5 rounded" method="POST" action="../create/create.php">
            <div class="mb-3">
              <label  class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
              <label  class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
              <label  class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label  class="form-label">Fakultas</label>
              <input type="text" class="form-control" id="fakultas" name="fakultas">
            </div>
            <div class="mb-3">
              <label  class="form-label">Prodi</label>
              <input type="text" class="form-control" id="prodi" name="prodi">
            </div>
            <div class="mb-3">
              <label  class="form-label">Semester</label>
              <input type="text" class="form-control" id="semester" name="semester">
            </div>
            <div class="mb-3">
              <label  class="form-label">Divisi_id</label>
              <select id="divisiId" name="divisiId" class="form-select">
                <option></option>
                <option>1 - Front End</option>
                <option>2 - Microsoft Office</option>
                <option>3 - Backend</option>
              </select>
            </div>
            <div class="mb-3">
              <label  class="form-label">Divisi</label>
              <select id="divisi" name="divisi" class="form-select" >
                <option></option>
                <option>INTI</option>
                <option>SDM</option>
                <option>DIKLATBANG</option>
                <option>INFOKOMAD</option>
                <option>P2M</option>
                <option> DANUS dan HUMAS</option>
              </select>
            </div>
            <div class="mb-3">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control" id="pass" name="pass">
            </div>
            
            <button type="submit" class="btn btn-primary">Add member</button>
          </form>  
  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
