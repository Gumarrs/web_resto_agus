<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">


  <title>GUMARESTO</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/header.png" width="90" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto px-5">
          <li class="nav-item px-4">
            <a class="nav-link active text-success" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="index.php #About">About</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="index.php #Service">Services</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="index.php #Menu">Menu</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="index.php #Contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <style>
    .banner {
      height: 50vh;
      background: url('img/ingredients-cooking-gray-concrete.jpg');
      background-size: cover;
      opacity: 0.7;
      background-position: center;
    }

    .banner-content {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <div class="container-fluid banner mb-5">
    <div class="container banner-content col-lg-6">
      <div class="text-center">
        <h1 class="display-1   fw-bold">
          ORDER FOOD NOW
          <h1 />
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <section id="order mb-5 p-5">
    <div class="container">
      <form class="row g-3" method="POST">
        <?php
        include "koneksi.php";

        if (isset($_POST["submit"])) {
          $nama_pembeli = $_POST["nama_pembeli"];
          $nama_makanan = $_POST["nama_makanan"];
          $jumlah = $_POST["jumlah"];
          $keterangan = $_POST["keterangan"];

          $query = "INSERT INTO pesanan VALUES ('','$nama_pembeli','$nama_makanan',$jumlah,'$keterangan')";
          mysqli_query($koneksidb, $query);
          if ($query) {
            echo "
<script>
alert('Pesanan berhasil diorder dan transaksi lakukan di kasir');
document.location.href = 'pemesanan.php';
</script>
  ";
          }
        }
        ?>

        <div class="col-md-6">
          <label class="form-label">Nama</label>
          <input type="text" name="nama_pembeli" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Food</label>
          <select name="nama_makanan" class="form-select">
            <option selected>Pilih Makanan</option>
            <option>Barbecue salad</option>
            <option>Salad with fish</option>
            <option>Spinach salad</option>
          </select>
        </div>
        <div class="col-md-2">
          <label class="form-label">Jumlah</label>
          <input type="text" name="jumlah" class="form-control" required>
        </div>
        <div class="col-md-3">
          <label class="form-label">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" required>
        </div>
        <div class=" col-12">
          <input type="submit" name="submit" class="btn btn-success" value="ORDER">
        </div>
      </form>
    </div>
  </section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.js""></script>
    <script src=" js/popper.min.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>