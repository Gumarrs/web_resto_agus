<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Makanan</title>
</head>

<body>
    <?php
    include "../koneksi.php";
    if (isset($_GET['id_order'])) {
        $id_order   = $_GET['id_order'];
        $query = mysqli_query($koneksidb, "SELECT * FROM pesanan WHERE id_order='$id_order'") or die('Query Error : ' . mysqli_error($koneksidb));
        while ($data  = mysqli_fetch_assoc($query)) {
            $id_order           = $data['id_order'];
            $nama_pembeli          = $data['nama_pembeli'];
            $nama_makanan  = $data['nama_makanan'];
            $jumlah       = $data['jumlah'];
            $total = $jumlah * 25000;
        }
    }
    ?>
    <div class="container">
        <style>
            .struk {
                text-align: center;
            }
        </style>
        <div class="struk">
            <h4>Struk Pembayaran</h4>
            <p>
                Nama pembeli : <?= $nama_pembeli ?> <br>
                Nama makanan : <?= $nama_makanan ?><br>
                Jumlah makanan : <?= $jumlah  ?>
                <br> Total harga : <?php echo $total ?>
            </p>
            <?php echo date('l, d-m-Y  h:i:s a'); ?>
            <script>
                window.print();
            </script>
        </div>

</body>

</html>