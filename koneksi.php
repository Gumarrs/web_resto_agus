<?php
$koneksidb = mysqli_connect("localhost", "root", "", "db_guresto");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
