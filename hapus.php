<?php
    include "config.php";

    $id = val($_GET['id']);

    $sql = "DELETE FROM data WHERE id = '$id'";

    $del = $conn->query($sql);

    if($del) {
        alert('Berhasil!');
        redir('index.php');
    } else {
        alert('Gagal!');
        redir('index.php');
    }
?>