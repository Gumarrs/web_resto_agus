<?php
// Panggil koneksi database
require_once "../koneksi.php";

if (isset($_POST['simpan'])) {
    if (isset($_POST['id_makanan'])) {
        $id_makanan           = mysqli_real_escape_string($koneksidb, trim($_POST['id_makanan']));
        $nama_makanan           = mysqli_real_escape_string($koneksidb, trim($_POST['nama_makanan']));
        $harga_makanan          = mysqli_real_escape_string($koneksidb, trim($_POST['harga_makanan']));
        $gambar  = mysqli_real_escape_string($koneksidb, trim($_POST['gambar']));

        $query = mysqli_query($koneksidb, "UPDATE makanan SET nama_makanan 			= '$nama_makanan',
														harga_makanan 	= '$harga_makanan',
														gambar 	= '$gambar',
												  WHERE id_makanan 			= '$id_makanan'");

        // cek query
        if ($query) {
            // jika berhasil tampilkan pesan berhasil update data
            echo "
            <script>
            alert('Data Berhasil Di Ubah');
            document.location.href = 'makanan.php';
            </script>
            ";
        } else {
            // jika gagal tampilkan pesan kesalahan
            header('location: makanan.php?alert=1');
        }
    }
}
