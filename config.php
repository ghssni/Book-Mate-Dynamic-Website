<?php 
    $db_host = "127.0.0.1:3306";
    $db_username = "root";
    $db_password = "";
    $db_name = "profiling";

    // Buat koneksi ke server mysql
    $koneksi = new mysqli($db_host,$db_username,$db_password,$db_name);

    if ($koneksi->connect_error){
        die('koneksi ke database gagal');
    }
    echo "Koneksi Berhasil";

?>