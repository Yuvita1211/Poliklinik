<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <!-- Bootstrap Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"> 
    <title>Poliklinik</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Sistem Informasi Poliklinik
    </a>
    <button class="navbar-toggler"
    type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false"
    aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
            Data Master
          </a>

          <ul class="dropdown-menu">
            <li>
              <!-- <a class="dropdown-item" href="index.php?page=dokter"> -->
              <a class="dropdown-item" href="dokter.php">
                Dokter
              </a>
            </li>
            <li>
              <!-- <a class="dropdown-item" href="index.php?page=pasien"> -->
              <a class="dropdown-item" href="pasien.php">
                Pasien
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="index.php?page=Periksa"> -->
          <a class="nav-link" href="periksa.php">
            Periksa
          </a>
        </li>
        <div class="d-flex">
            <li class="nav-item">
          <!-- <a class="nav-link" href="index.php?page=Periksa"> -->
          <a class="nav-link" href="Register.php">
            Register
          </a>
        </li>
        </div>
        <div class="d-flex">
            <li class="nav-item">
          <!-- <a class="nav-link" href="index.php?page=Periksa"> -->
          <a class="nav-link" href="Login.php">
            Login
          </a>
        </li>
        </div>
         
      </ul>
    </div>
  </div>
</nav>

<div class="card">
    <h4>Register</h4>
    <form class="form row" method="POST" action="" name="myForm" onsubmit="return(validate());">
    <!-- Kode php untuk menghubungkan form dengan database -->
    <div>
        <label for="inputIsi" class="form-label fw-bold">
           Username
        </label>
        <input type="text" class="form-control" name="nama" id="inputIsi" >
    </div>
    <div>
        <label for="inputTanggalAwal" class="form-label fw-bold">
           Password
        </label>
        <input type="text" class="form-control" name="tgl_awal" id="inputTanggalAwal" >
    </div>
    <div>
        <label for="inputTanggalAkhir" class="form-label fw-bold">
        Konfirmasi Password
        </label>
        <input type="text" class="form-control" name="tgl_akhir" id="inputTanggalAkhir">
    </div>
    <div class="col mb-2 d-flex">
        <button type="submit" class="btn btn-primary rounded-pill px-3 mt-auto" name="simpan">Register</button>
    </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
