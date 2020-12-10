<?php include('koneksi.php');
$id = $_GET['idkustomer'];
mysqli_query($koneksi, "delete from kustomer where idkustomer=$id'");
echo "<meta http-equiv='refresh content='0,url=http://localhost/>lsp/data_kustomer.php'>";
