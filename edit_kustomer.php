<?php
include 'koneksi.php';
$id = $_GET['idkostumer'] ? $_GET['idkustomer'] : "";
$sql = mysqli_query($koneksi, "select * from kustomer where idkustomer='$id'");
$row = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript"="js/jquery-3.4.1.min"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">Edit Data Kustomer</div>
            <div class="card-body">
                <form class="form-item" action="" methods="post" role="form">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control col-md-9" name="nmkustomer" placeholder="Nama Kustomer">
                    </div>

                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" class="form-control col-md-4" name="telp" placeholder="No Telp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>

                    <div class="form-group">
                        <label for="telp">Kota</label>
                        <input type="text" class="form-control col-md-6" name="kota" placeholder="Kota">
                    </div>

                    <div class="form-group">
                        <label for="telp">kodepos</label>
                        <input type="text" class="form-control col-md-4" name="kodepos" placeholder="Kodepos">
                    </div>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
        <button type="reset" class="btn btn-primary">Batal</button>
        </form>
        <?php include "koneksi.php";
        if (isset($_POST['submit'])) {

            $nmkustomer = $_POST['nmkustomer'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            $kota = $_POST['kota'];
            $kodepos = $_POST['kodepos'];
            mysqli_query($koneksi, " INSERT INTO kustomer(nmkustomer,telp,alamat,kota,kodepos)
            values('$nmkustomer','$telp','$alamat','$kota','$kodepos')") or die(mysql_error());
            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang di simpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/lsp/data_kustomer.php'>";
        }
        ?>

    </div </div> </div> </body> </html>