<?php include 'layouts/header.php' ?>

<?php include 'layouts/navbar.php' ?>
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h2>Form Pemesanan Wisata</h2>
            <form action="proses.php" method="POST">
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama-pemesan" name="nama-pemesan" required>
                    </div>


                    <div class="col-12 col-md-6">
                        <label for="nama-paket" class="form-label">Paket Wisata</label>
                        <select class="form-select" id="nama-paket" name="nama-paket" onchange="updateHargaPaket()" aria-label="Default select example">
                        <option selected>Pilih Paket</option>
                            <option value="1">Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                            <option value="4">Paket 4</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="durasi" class="form-label">Durasi Perjalanan</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2" min="1" required>
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>
                    </div>  
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-3">
                        <label for="jumlah-orang" class="form-label">Jumlah Orang</label>
                        <input type="number" class="form-control" id="jumlah-orang" name="jumlah-orang" min="1"
                            required>
                    </div>
                    <div class="col">
                        <label class="form-label">Pilih Layanan</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="penginapan" name="penginapan"
                                value="Y" onclick="handlePenginapan(this)">
                            <label class="form-check-label" for="penginapan">Penginapan (Rp.300.000)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="transportasi" name="transportasi"
                                value="Y" onclick="handleTransportasi(this)">
                            <label class="form-check-label" for="transportasi">Transportasi (Rp.200.000)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="konsumsi" name="konsumsi" value="Y" onclick="handleKonsumsi(this)">
                            <label class="form-check-label" for="konsumsi">Konsumsi (Rp.150.000)</label>
                        </div>
                </div>
                <div class="row mb-3">

                <div class="row">
                        <div class="mb-3 col-12 col-md-4">
                            <label for="harga-paket" class="form-label">Harga Paket</label>
                            <div class="input-group input-group-sm">
                                <span class="input-group-text" id="bassic-addon">Rp</span>
                                <input type="text" class="form-control form-Control-sm" id="harga-paket" name="harga-paket" aria-describedby="bassic-addon2">
                            </div>
                        </div>
                        <div class="mb-3 col-12 col-md-4">
                            <label for="harga-layanan" class="form-label">Harga Layanan</label>
                            <div class="input-group input-group-sm">
                                <span class="input-group-text" id="bassic-addon2">Rp</span>
                                <input type="text" class="form-control form-Control-sm" id="harga-layanan" name="harga-layanan" aria-describedby="bassic-addon2">
                            </div>
                        </div>

                        <div class="mb-3 col-12 col-md-4">
                            <label for="total-pembayaran" class="form-label">Total Pembayaran</label>
                            <div class="input-group input-group-sm">
                                <span class="input-group-text" id="bassic-addon2">Rp</span>
                                <input type="text" class="form-control form-Control-sm" id="total-pembayaran" name="total-pembayaran" aria-describedby="bassic-addon2">
                            </div>
                        </div>

                    </div>
                </div>
                </div>

                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-sm btn-danger" value="simpan"> Reset </button>
            </form>
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

</body>


<?php include "layouts/footer.php" ?>