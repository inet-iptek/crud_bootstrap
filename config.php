<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_crud_inet";
    
    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno) {
        echo "Koneksi Gagal!" . $conn->connect_error;
    }

    function alert($a) {
        echo "<script>
            alert('".$a."');
        </script>";
    }

    alert("Coba");
    
?>