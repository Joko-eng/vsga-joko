<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jwd_pt";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// $dbConn = mysqli_connect($servername, $username, $password, $dbname);

// if ($koneksi->connect_errno) {
//     echo "Database tidak terkoneksi" . mysqli_connect_error();
// } else {
//     echo "Database  terkoneksi";
// }


// $nama = $_POST['nama-pemesan'];
// $paket = $_POST['nama-paket'];
// $tgl = $_POST['tanggal'];
// $durasi = $_POST['durasi'];
// $jumlahOrang = $_POST['jumlah-orang'];
// // print_r($_POST);

// $penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
// $transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
// $konsumsi = isset($_POST['konsumsi']) ? 'Y' : 'N';

// //versi sat baris ernary operator

// // if(isset($_POST['penginapan'])){
// //     $penginapan = 'Y';
// // }
// $totalPembayaran = $_POST['total-pembayaran'];

// // $query = "INSERT INTO paket_wisata (nama, paket, tgl_pesan, durasi, jml_orang, penginapan, transportasi, konsumsi, total) VALUES 
// //         VALUES ('$nama,' '$paket', '$tgl', '$durasi', '$jumlahOrang', '$penginapan', '$transportasi', '$konsumsi')";

// $query = "INSERT INTO paket_wisata (nama, paket, tgl_pesan, durasi, jml_orang, penginapan, transportasi, konsumsi, total) VALUES 
// ('$nama', '$paket', '$tgl', $durasi, $jumlahOrang, '$penginapan', '$transportasi', '$konsumsi', $totalPembayaran)";


// $sukses =mysqli_query($koneksi, $query);

// if ($sukses) {
//     echo "Data berhasil disimpan";
// } else {
//     echo "Data gagal disimpan". mysqli_error($koneksi);
// }
?>