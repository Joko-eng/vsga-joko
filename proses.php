<?php
include "koneksi.php";

$nama = $_POST['nama-pemesan'];
$jenis_kelamin = isset($_POST['jenis-kelamin']) ? ($_POST['jenis-kelamin'] == 'Pria' ? 'Pria' : 'Wanita') : '';
$no_identitas = $_POST['no-identitas'];
$kamar = $_POST['nama-kamar'];
$hargakamar = $_POST['harga-kamar'];
$tgl = $_POST['tanggal'];
$durasi = $_POST['durasi'];
$breakfest = isset($_POST['breakfest']) ? 'Y' : 'N';
$hargaLayanan = $_POST['harga-layanan'];

$totalLayanan = $_POST['total-layanan'];
$totalKamar = $_POST['total-harga-kamar'];
$diskon = $_POST['total-diskon'];


//versi sat baris ernary operator

$totalPembayaran = $_POST['total-pembayaran'];

// s
$query = "INSERT INTO pesan (nama, jenis_kelamin, no_identitas, kamar, harga, tanggal, durasi, layanan, total, total_diskon, total_kamar, total_layanan) VALUES 
('$nama', '$jenis_kelamin', '$no_identitas', '$kamar', '$hargakamar', '$tgl', $durasi, '$breakfest', '$totalPembayaran', '$diskon', '$totalKamar', '$totalLayanan')";

$sukses = mysqli_query($koneksi, $query);








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
                BUKTI PEMESANAN KAMAR
            </div>

            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Nama Pemesan</td>
                        <td><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Identitas</td>
                        <td><?php echo $jenis_kelamin; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $no_identitas; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Check In</td>
                        <td><?php echo $tgl; ?></td>
                    </tr>
                    <tr>
                        <td>Type Kamar</td>
                        <td>
                            <?php
                            if ($kamar == '1') {
                                echo 'Standart ';
                            }
                            if ($kamar == '2') {
                                echo 'Deluxe ';
                            }
                            if ($kamar == '3') {
                                echo 'Family ';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Durasi Penginapan (Hari)</td>
                        <td><?php echo $durasi; ?> Hari </td>
                    </tr>
                    <tr>
                        <td>Pilihan Layanan</td>
                        <td>
                            <?php
                            if ($breakfest == 'Y') {
                                echo 'Breakfest ';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Penginapan</td>
                        <td>Rp. <?php echo number_format($hargakamar, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <td>Harga layanan</td>
                        <td>Rp. <?php echo number_format($hargaLayanan, 0, ',', '.'); ?></td>
                    </tr>

                    <tr>
                        <td>Diskon</td>
                        <td><?php
                            if ($durasi > 3) {
                                echo '10%';
                            } ?></td>
                    </tr>

                    <td>Total Harga Kamar</td>
                    <td>Rp. <?php echo number_format($totalKamar, 0, ',', '.'); ?></td>
                    </tr>

                    <td>Total Harga Layanan</td>
                    <td>Rp. <?php echo number_format($totalLayanan, 0, ',', '.'); ?></td>
                    </tr>
                    <td>Total Pembayaran</td>
                    <td>Rp. <?php echo number_format($totalPembayaran, 0, ',', '.'); ?></td>
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
                        <a href="tentangKami.php" class="btn btn-danger btn-block mx-5">Tidak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card" style="border-radius: 20px;">
            <div class="card-body">
                <h5 class="card-title">Seblang</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/sHYjBNtJJZw?si=1ZI12gFDQ8hFWWWL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="card" style="border-radius: 20px;">
            <div class="card-body">
                <h5 class="card-title">Padhang Ulan</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/V0ZmEre9PIU?si=Wzhoj-ScjSlgTH1j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="card" style="border-radius: 20px;">
            <div class="card-body">
                <h5 class="card-title">Gandrung</h5>
                <div class="text-center ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5w2dyUcIj4o?si=l9xQj6vm7zJ-W4K_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("total-diskon").value = diskon;
    document.getElementById("total-harga-kamar").value = jumlah;
    document.getElementById("total-layanan").value = jumlahLayanan;
    document.getElementById("total-pembayaran").value = jumlahTagihan;
</script>

<?php include "layouts/footer.php" ?>