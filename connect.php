<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "datamhs";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("koneksi gagal!!!");
    } 

?>