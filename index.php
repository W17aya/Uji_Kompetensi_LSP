<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <br>
        <h4>CRUD Sederhana dengan PHP dan Bootstrap</h4>
        <?php

        include "koneksi.php";

        //Cek apakah ada nilai dari method GET dengan nama id_anggota
        if (isset($_GET['id_anggota'])) {
            $id_anggota = htmlspecialchars($_GET["id_anggota"]);

            $sql = "delete from anggota where id_anggota='$id_anggota' ";
            $hasil = mysqli_query($kon, $sql);

            //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>


        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Kota</th>
                    <th colspan='2'>Aksi</th>

                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $sql = "select * from kustomer order by idkustomer desc";

            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["username"]; ?></td>
                        <td><?php echo $data["nmkustomer"];   ?></td>
                        <td><?php echo $data["alamat"];   ?></td>
                        <td><?php echo $data["email"];   ?></td>
                        <td><?php echo $data["telp"];   ?></td>
                        <td><?php echo $data["kota"];   ?></td>
                        <td>
                            <a href="update.php?id_anggota=<?php echo htmlspecialchars($data['id_anggota']); ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_anggota=<?php echo $data['id_anggota']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>

    </div>
    <link rel="stylesheet" href="js/jquery-3.5.1.min.js">
</body>

</html>