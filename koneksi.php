<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "db_tubesweb";

    $connect = mysqli_connect($namaHost, $username, $password, $database) or die ('Gagal Login Ke Database');
?>