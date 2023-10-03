<?php

require 'functions.php';
$conn = mysqli_connect('localhost', 'root', '', 'prakweb2023b_213040064');
//session_start ();

// if( !isset($_SESSION["login"]) ) {
//header("Location: login.php");
//}

// pagination
// konfigurasi
//$jumlahDataPerhalaman = 5;
//$jumlahData = count(query("SELECT * FROM musik"));
//$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
//$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
//$awalData =  ( $jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;

//$buku = query("SELECT * FROM buku ");
$buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.id_kategori ; ");
// tombol cari di tekan

?>
<!DOCTYPE html>
<html lang="en">>
<head>
    <tittle>Salma Salsabila</tittle>
    <link rel= "stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-success">
   <div class="container-fluid">
        <a class="text-white navbar-brand" href="#">Para Buku</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse" Id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" Id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="tambah.php" class="tambah">Tambah data</a></li>
                </ul>
            </li>
                <li class="nav-item">
            </ul>
        <form action="" method="post" class="form-cari">
            <input class="form-control me-2" type="text" name="keyword" autofocus placeholder="Search" aria-label="Search" autocomplete="off" id="keyword">
            <button class="btn btn-outline-light" type="submit" name="submit" id="tombol-cari">Search</button>

        </form>
        </div> -->
    </div>
    </nav>
    <br>

<div id="container">
<div class="wrapper">
<table class="table table-secondary" border="1" cellpadding="10" cellspacing="0">
    <thead class="table-success">
    <tr>

    <tr>
        <th>No.</th>
        <th>Judul buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun terbit</th>
        <th>Gambar</th>
        <th>Kategori</th>
    </tr> 
    </thead>
 
  <?php $no = 1; ?>
  <?php foreach($buku as $row) : ?>
  <tr> 
    <td><?= $no++; ?></td>
    <td><?= $row["judul_buku"]; ?></td>
    <td><?= $row["penulis"]; ?></td>
    <td><?= $row["penerbit"]; ?></td>
    <td><?= $row["tahun_terbit"]; ?></td>
    <td>
      <img src="img/<?= $row["gambar"]; ?>" width="65">
    </td>
    <td><?= $row["nama_kategori"]; ?></td>
    
    
  </tr>
  
  <?php endforeach; ?>

</table>
</div>
</div>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
</body>
</html>


