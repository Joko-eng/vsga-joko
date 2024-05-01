<?php
include "koneksi.php";

$nama = $_POST['nama-pemesan'];
$paket = $_POST['nama-paket'];
$tgl = $_POST['tanggal'];
$durasi = $_POST['durasi'];
$jumlahOrang = $_POST['jumlah-orang'];
$hargaPaket = $_POST['harga-paket'];
//print_r($_POST);

$penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$konsumsi = isset($_POST['konsumsi']) ? 'Y' : 'N';

$hargaLayanan = $_POST['harga-layanan'];

//versi sat baris ernary operator

// if(isset($_POST['penginapan'])){
//     $penginapan = 'Y';
// }
$totalPembayaran = $_POST['total-pembayaran'];

// $query = "INSERT INTO paket_wisata (nama, paket, tgl_pesan, durasi, jml_orang, penginapan, transportasi, konsumsi, total) VALUES 
//         VALUES ('$nama,' '$paket', '$tgl', '$durasi', '$jumlahOrang', '$penginapan', '$transportasi', '$konsumsi')";

$query = "INSERT INTO paket_wisata (nama, paket, tgl_pesan, durasi, jml_orang, penginapan, transportasi, konsumsi, total) VALUES 
('$nama', '$paket', '$tgl', $durasi, $jumlahOrang, '$penginapan', '$transportasi', '$konsumsi', $totalPembayaran)";


$sukses = mysqli_query($koneksi, $query);

// if ($sukses) {
//     echo "Data berhasil disimpan";
// } else {
//     echo "Data gagal disimpan" . mysqli_error($koneksi);
// }

// Ambil data yang baru saja disimpan dari database
// $query_select = "SELECT * FROM paket_wisata WHERE nama='$nama' AND paket='$paket' AND tgl_pesan='$tgl'";
// $result = mysqli_query($koneksi, $query_select);
// $data = mysqli_fetch_assoc($result);






?>
<?php include 'layouts/header.php' ?>

<?php include 'layouts/navbar.php' ?>

<div class="row mt-3">
    <div class="col-12 col-md-9">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat</strong> Pesanan Anda Berhasil Di Buat.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="card">
            <div class="card-header text-center">
                BUKTI PEMESANAN PAKET WISATA
            </div>

            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Orang</td>
                        <td><?php echo $jumlahOrang; ?> Orang</td>
                    </tr>
                    <tr>
                        <td>Waktu Perjalan</td>
                        <td><?php echo $tgl; ?></td>
                    </tr>
                    <tr>
                        <td>Layanan Paket</td>
                        <td>Paket <?php echo $paket; ?></td>
                    </tr>
                    <tr>
                        <td>Durasi Perjalanan (Hari)</td>
                        <td><?php echo $durasi; ?> Hari </td>
                    </tr>
                    <tr>
                        <td>Pilihan Layanan</td>
                        <td>
                            <?php
                            if ($penginapan == 'Y') {
                                echo 'Penginapan, ';
                            }
                            if ($transportasi == 'Y') {
                                echo 'Transportasi, ';
                            }
                            if ($konsumsi == 'Y') {
                                echo 'Konsumsi, ';
                            }
                            ?>
                        </td>
                    </tr>
                    <td>Harga Paket</td>
                    <td>Rp. <?php echo $hargaPaket; ?></td>
                    </tr>
                    <td>Harga Layanan</td>
                    <td>Rp. <?php echo $hargaLayanan; ?></td>
                    </tr>
                    <td>Total Pembayaran</td>
                    <td>Rp. <?php echo $totalPembayaran; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card text-center">
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <span>Pesan Lagi? </span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <a href="pesan.php" class="btn btn-primary btn-block mx-5">Ya</a>
                        <a href="daftarPesanan.php" class="btn btn-danger btn-block mx-5">Tidak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pulau Merah</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/KoM8FvZ06iE?si=Gttr2oZl6-NvBmmT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ijen Blue Fire</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/oigI5wp3RQg?si=1zA8mGPptIFIt_aM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ketapang Indah</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/tSupKCkMQ1M?si=q1aroKEAQuISV7L7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "layouts/footer.php" ?>