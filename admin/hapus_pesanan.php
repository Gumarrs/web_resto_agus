<?php
// Panggil koneksi database
require_once "../koneksi.php";

if (isset($_GET['id_order'])) {

    $id_order = $_GET['id_order'];

    // perintah query untuk menghapus data pada tabel is_siswa
    $query = mysqli_query($koneksidb, "DELETE FROM pesanan WHERE id_order='$id_order'");

    // cek hasil query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil delete data
        echo "
        <script>
        alert('Data Berhasil Di Hapus');
        document.location.href = 'pesanan.php';
        </script>
        ";
    } else {
        // jika gagal tampilkan pesan kesalahan
        header('location: makanan.php?alert=1');
    }
}
