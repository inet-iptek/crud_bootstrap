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
                    <label for="alamat">alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button type="submit" name="btn" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
<?php

?>