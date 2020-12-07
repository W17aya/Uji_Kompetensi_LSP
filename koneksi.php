<?php
$koneksi = mysqli_connect("Localhost", "root", "", "db_lsp");
if (mysqli_connect_error()) {
    echo "Koneksi Gagal:" . mysqli_connect_error();
}
