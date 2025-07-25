<?php
    $koneksi = mysqli_connect("localhost","root","","db_pemerintah");

    //memeriksa koneksi
    if (mysqli_connect_errno()){
        echo"Gagal Koneksi Database: ".mysqli_connect_error();
    }
?>