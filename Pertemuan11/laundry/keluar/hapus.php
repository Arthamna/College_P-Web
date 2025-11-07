<?php
    session_start();
    
    require '../functions.php';

    if(!isset($_SESSION["login"])) {
        header("Location: ../session/login.php");
        exit;
    }
    $id = $_GET['id'];
    if(hapus_keluar($id) > 0) {
        header("Location: hapus-sukses.php");
        exit;
    }
    else {
        header("Location: hapus-gagal.php");
        exit;
    }

?>