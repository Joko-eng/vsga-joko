<?php include "layouts/header.php" ?>

<?php include "layouts/navbar.php" ?>

<?php include "koneksi.php" ?>


<div class="row mt-3 text-center">
        <h3>DAFTAR PESANAN</h3>
        <div class="card">

<div class="container mt-3">
  <table class="table table-bordered">
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Paket</th>
      <th scope="col">Tanggal Pemesanan</th>
      <th scope="col">Durasi</th>
      <th scope="col">Jumlah Orang</th>
      <th scope="col">Penginapan</th>
      <th scope="col">Transportasi</th>
      <th scope="col">Konsumsi</th>
      <th scope="col">Total Pembayaran</th>
      <!-- <th scope="col">Aksi</th> -->
    </tr>

    <?php 
      $query = "SELECT * FROM paket_wisata";
      $hasil = mysqli_query($koneksi, $query);

      if ($hasil) {
        $nomor = 1;

        while ($row = mysqli_fetch_assoc($hasil)) {
          echo "<tr>";
          echo "<td>" . $nomor . "</td>";
          echo "<td>" . $row['nama'] . "</td>";
          echo "<td>Paket " . $row['paket'] . "</td>";
          echo "<td>" . $row['tgl_pesan'] . "</td>";
          echo "<td>" . $row['durasi'] . " Hari</td>";
          echo "<td>" . $row['jml_orang'] . " Orang</td>";
          echo "<td>" . $row['penginapan'] . "</td>";
          echo "<td>" . $row['transportasi'] . "</td>";
          echo "<td>" . $row['konsumsi'] . "</td>";
          echo "<td>Rp. " . $row['total'] . "</td>";
        //   echo "<td>";
        //   echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-sm btn-primary me-1'>Update</a>";
        //   echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Delete</a>";
        //   echo "</td>";
          echo "</tr>";          
          $nomor++;
        }
      } else {
        echo "Query failed: " . mysqli_error($koneksi);
      }

      mysqli_close($koneksi);
    ?>
</table>
</div>
        </div>
</div>
<?php include "layouts/footer.php" ?>