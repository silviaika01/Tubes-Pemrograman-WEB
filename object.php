<?php
$host = "localhost";
$username = "root";
$password = "";

$koneksi = new mysqli($host, $username, $password);

if ($koneksi->connect_error){
    die("koneksi ke database gagal");
} else {
    echo "koneksi ke database berhasil";
}
?> 