<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);


// if ($koneksi->connect_errno) {
//     echo "Database tidak terkoneksi" . mysqli_connect_error();
// } else {
//     echo "Database  terkoneksi";
// }
// if (!$koneksi) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// echo "Koneksi berhasil";
// ?>