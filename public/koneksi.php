<?php
$servername = "localhost";
$database = "users"
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal : ". mysqli_connect_error());
} else {
    echo "Koneksi Berhasil;"
}