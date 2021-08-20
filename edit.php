<?php include "config.php"; ?>
<?php include "header.php"; ?>
<?php
    $id = val($_GET['id']);
    $sql = "SELECT * FROM data WHERE id ='$id'";
    $data = $conn->query($sql);
    $dt = $data->fetch_array();
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1>Edit Data</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $dt['nama']; ?>">
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?= $dt['kelas']; ?>">
                </div>      
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control"><?= $dt['alamat']; ?></textarea>
                </div>

                <button type="submit" name="btn" class="btn btn-info">Edit</button>

            </form>
            <a href="index.php" class="btn btn-link mt-5">Kembali</a>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
<?php
    if(isset($_POST['btn'])) {
        $nama = val($_POST['nama']);
        $kelas = val($_POST['kelas']);
        $alamat = val($_POST['alamat']);

        if(empty($nama) || empty($kelas) || empty($alamat)) {
            alert('Field tidak boleh kosong!');
        } else {
            $sql = "UPDATE data SET nama = '$nama', kelas = '$kelas', alamat = '$alamat' WHERE id = '$id'";
            $edit = $conn->query($sql);

            if($edit) {
                alert('Berhasil!');
                redir('index.php');
            } else {
                alert('Gagal!');
            }
        }
    }
?>