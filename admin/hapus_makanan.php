<?php
// Panggil koneksi database
require_once "../koneksi.php";

if (isset($_GET['id_makanan'])) {

    $id_makanan = $_GET['id_makanan'];

    // perintah query untuk menghapus data pada tabel is_siswa
    $query = mysqli_query($koneksidb, "DELETE FROM makanan WHERE id_makanan='$id_makanan'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        echo "
        <script>
        alert('Data Berhasil Di Hapus');
        document.location.href = 'makanan.php';
        </script>
        ";
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location: makanan.php?alert=1');
    }
}
