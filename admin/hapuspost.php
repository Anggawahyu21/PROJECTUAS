<?php
require 'functionadmin.php';

$idpost = $_GET["id"];

if(hapuspost($idpost) > 0 ){
        echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href='index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('data gagal dihapus');
            document.location.href='index.php';
        </script>";
}

?>