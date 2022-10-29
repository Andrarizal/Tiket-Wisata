<?php include_once 'action.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pemesanan Tiket Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="ticket.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid px-4">
    <a class="navbar-brand fw-bold " >
      <img src="images/logo-1.png" width='100px' alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link fw-semibold" aria-current="page" href="index.php">Beranda</a>
        <a class="nav-link fw-semibold" href="pemesanan_tiket.php">Pemesanan Tiket</a>
        <a class="nav-link fw-semibold" href="daftar_harga.php">Daftar Harga</a>
        <a class="nav-link fw-semibold" href="grafik.php">Grafik Pemesanan</a>
        <a class="nav-link fw-semibold" href="daftar_wisata.php">Daftar Wisata</a>
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row mt-4">
  <!-- Looping data -->
  <!-- menampilkan gambar dan video -->
  <?php for ($i = 0; $i < count(get_tempat_wisata()); $i++) { ?>
    <div class="col-lg-4">
        <div class="card text-center">
            <div class="card-body p-0">
                <img width="400px" height="230px" src=" <?= URL ?>/images/<?= get_tempat_wisata()[$i]['foto'] ?>"
                    alt=""> 
            </div> 
            <br>
            <div>
            <iframe width="400px" height="230px" src="<?= get_tempat_wisata()[$i]['video'] ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> 
            </div>
        </div>
    </div>
  <?php } ?>
</div>
</div>
</html>