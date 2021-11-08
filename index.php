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
      <a class="navbar-brand" href="#">
        <img src="img/header.png" width="90" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto px-5">
          <li class="nav-item px-4">
            <a class="nav-link active text-success" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="#Service">Services</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="#Menu">Menu</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link" href="#Contact">Contact Us</a>
          </li>
          <li class="nav-item px-4 bg-success">
            <a class="nav-link text-white" href="pemesanan.php">Reverse Table</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <style>
    .banner {
      height: 100vh;
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
        <h1 class="display-2 fw-bold">
          Welcome to Guresto Food Restaurant
          <h1 />
          <a href="pemesanan.php"> <button type="button" class="btn btn-success" href="pemesanan.php">ORDER NOW</button></a>
      </div>
    </div>
  </div>
  <section id="About">
    <div class="container about-us mb-5 p-5">
      <div class="row">
        <div class="col-sm-7 text-center p-4">
          <img src="img/plate2.png" width="400px" alt="">
        </div>
        <div class="col-sm-4 p-4">
          <h3 class="text-success p-2">About Us</h3>
          <h2 class="p-2">We cook the best<br>tasty food</h2>
          <p class="p-2">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Optional JavaScript; choose one of the two! -->
  <section id="Service">
    <p class="text-center text-success">Offering</p>
    <h2 class="text-center">Our Amazing Service</h2>
    <div class="container text-center">
      <div class="card-group">
        <div class="card">
          <img src="img/cutlery.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Excellent food</h5>
            <p class="card-text text-center">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/hamburger.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Fast food</h5>
            <p class="card-text text-center">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/truck.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Delivery</h5>
            <p class="card-text text-center">We offer our clients excellent quality services for many years, with the best and delicious food in the city.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Menu">
    <?php
    include "koneksi.php";
    $data = mysqli_query($koneksidb, "SELECT * FROM makanan");
    ?>
    <div class="container mb-5 p-5">
      <p class="text-center text-success">Special</p>
      <h2 class="text-center">Menu of the week</h2>
      <div class="d-flex justify-content-around text-center">
        <?php while ($tampil = mysqli_fetch_array($data)) { ?>
          <table class="table table-borderless">
            <tr>
              <td><img src="img/<?= $tampil["gambar"]; ?>" class="card-img-top"></td>
            </tr>
            <tr>
              <td><?= $tampil["nama_makanan"]; ?></td>

            </tr>
            <tr>

              <td><button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                  </svg> <?= $tampil["harga_makanan"]; ?></button></td>
            </tr>
          <?php } ?>
          </table>
      </div>
    </div>
    </div>
    <hr>
  </section>
  <section id="Contact">
    <div class="container mb-5 p-5">
      <p class="text-success">Let's talk</p>
      <h2> Contact us </h2>
      <p>If you want to reserve a table in our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
      <button type="button" class="btn btn-success">Contact us now</button>
    </div>
    <hr>
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