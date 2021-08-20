<?php include "config.php"; ?>
<?php include "header.php"; ?>  
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h1>Simple CRUD iNET <?= date('Y'); ?></h1>
            <a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM data";
                        $data = $conn->query($sql);
                        $no = 1;
                        while($dt = $data->fetch_array()) :
                    ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $dt['nama']; ?></td>
                        <td><?= $dt['kelas']; ?></td>
                        <td><?= $dt['alamat']; ?></td>
                        <td></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>