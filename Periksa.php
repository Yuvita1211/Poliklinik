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
              <a class="dropdown-item" href="index.php?page=pasien">
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
      </ul>
    </div>
  </div>
</nav>
<main role="main" class="container">
    <?php
    if (isset($_GET['page'])) {
    ?>
        <h2><?php echo ucwords($_GET['page']) ?></h2>
    <?php
        include($_GET['page'] . ".php");
    } else {
        echo "Selamat Datang di Sistem Informasi Poliklinik";
    }
    ?>
</main>
<div>
    <h4>Dokter</h4>
</div>
<form class="form row" method="POST" action="" name="myForm" onsubmit="return(validate());">
    <!-- Kode php untuk menghubungkan form dengan database -->
    <?php
    $id = '';
    $nama = '';
    $alamat= '';
    $Nohp =  '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ambil = mysqli_query($mysqli, 
        "SELECT * FROM tabel_dokter
        WHERE id=$id" . $_GET['id'] . "'");
        while ($row = mysqli_fetch_array($ambil)) {
            $id = $row['Id'];
            $nama = $row['nama'];
            $alamat = $row['alamat'];
            $Nohp= $row['no_hp'];
        }
    ?>
        <input type="hidden" name="id" value="<?php echo
        $_GET['id'] ?>">
    <?php
    }
    ?>
    <div>
        <label for="inputIsi" class="form-label fw-bold">
           Nama
        </label>
        <input type="text" class="form-control" name="nama" id="inputIsi" placeholder="Nama" value="<?php echo $nama ?>">
    </div>
    <div>
        <label for="inputTanggalAwal" class="form-label fw-bold">
           Alamat
        </label>
        <input type="text" class="form-control" name="tgl_awal" id="inputTanggalAwal" placeholder="Alamat" value="<?php echo $alamat ?>">
    </div>
    <div>
        <label for="inputTanggalAkhir" class="form-label fw-bold">
        No.Hp
        </label>
        <input type="text" class="form-control" name="tgl_akhir" id="inputTanggalAkhir" placeholder="No. HP" value="<?php echo $Nohp ?>">
    </div>
    <div class="col mb-2 d-flex">
        <button type="submit" class="btn btn-primary rounded-pill px-3 mt-auto" name="simpan">Simpan</button>
    </div>
</form>
<table class="table table-hover">
    <!--thead atau baris judul-->
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No.hp</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <!--tbody berisi isi tabel sesuai dengan judul atau head-->
    <tbody>
        <!-- Kode PHP untuk menampilkan semua isi dari tabel urut
        berdasarkan status dan tanggal awal-->
        <?php
$result = mysqli_query($mysqli, "SELECT * FROM tabel_periksa");
$no = 1;
while ($data = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['alamat'] ?></td>
        <td><?php echo $data['no_hp'] ?></td>
        <td>
            <a class="btn btn-success rounded-pill px-3" href="index.php?page=dokter&id=<?php echo $data['id'] ?>">Ubah</a>
            <a class="btn btn-danger rounded-pill px-3" href="index.php?page=dokter&id=<?php echo $data['id'] ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
<?php
}
?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
