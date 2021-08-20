<?php include "config.php"; ?>
<?php include "header.php"; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1>Tambah Data</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control">
                </div>      
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button type="submit" name="btn" class="btn btn-primary">Tambah</button>

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
            $sql = "INSERT into data(nama,kelas,alamat) VALUES('$nama','$kelas','$alamat')";
            $add = $conn->query($sql);

            if($add) {
                alert('Berhasil!');
                redir('index.php');
            } else {
                alert('Gagal!');
            }
        }
    }
?>