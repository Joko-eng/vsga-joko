<?php include 'layouts/header.php' ?>

<?php include 'layouts/navbar.php' ?>

<hr class="mb-1">
<div class="p-5">
<div class="row mt-3">
    <div class="col-12 col-md-9">
        <h2>Form Pemesanan Kamar</h2>
        <form action="proses.php" method="POST">
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama-pemesan" name="nama-pemesan" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="pria" name="jenis-kelamin" value="Pria">
                        <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="wanita" name="jenis-kelamin" value="Wanita">
                        <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label for="no-identitas" class="form-label">No Identitas</label>
                    <input type="text" class="form-control" id="no-identitas" name="no-identitas" maxlength="16" minlength="16" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="nama-kamar" class="form-label">Tipe Kamar</label>
                    <select class="form-select" id="nama-kamar" name="nama-kamar" onchange="updateHargakamar()" aria-label="Default select example">
                        <option selected>Pilih Tipe Kamar</option>
                        <option value="1">Standar</option>
                        <option value="2">Deluxe</option>
                        <option value="3">Family</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="durasi" class="form-label">Durasi</label>
                    <div class="input-group input-group-sm">
                        <input type="number" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2" min="1" onchange="updateDiskon()" required>
                        <span class="input-group-text" id="basic-addon2">hari</span>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="diskon" class="form-label">Diskon</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-Control-sm" id="diskon" name="diskon" aria-describedby="bassic-addon2" readonly>
                            <span class="input-group-text" id="basic-addon2">%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="mb-3 col-12 col-md-4">
                    <label for="harga-kamar" class="form-label">Harga Kamar</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="harga-kamar" name="harga-kamar" aria-describedby="bassic-addon2" readonly>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="total-diskon" class="form-label">Harga Diskonan</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="total-diskon" name="total-diskon" aria-describedby="bassic-addon2" readonly>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="harga-kamar" class="form-label">Total Harga Kamar</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="total-harga-kamar" name="total-harga-kamar" aria-describedby="bassic-addon2" readonly>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Pilih Layanan</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="breakfast" name="breakfast" value="Y" onclick="handleBreakfast(this)">
                        <label class="form-check-label" for="breakfast">Breakfast (Rp. 80.000)</label>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="harga-layanan" class="form-label">Harga Layanan</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="bassic-addon2">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="harga-layanan" name="harga-layanan" aria-describedby="bassic-addon2"readonly>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="total-layanan" class="form-label">Jumlah</label>
                    <div class="input-group">
                        <span class="input-group-text" id="bassic-addon2">Rp</span>
                        <input type="text" class="form-control form-Control-sm" id="total-layanan" name="total-layanan" aria-describedby="bassic-addon2" readonly>
                    </div>
                </div>
                <div class="mb-6 col-12 col-md-4">
                    <label for="total-pembayaran" class="form-label">Total Pembayaran</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" id="basic-addon2">Rp</span>
                        <input type="text" class="form-control form-control-sm" id="total-pembayaran" name="total-pembayaran" aria-describedby="basic-addon2" readonly>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-start align-items-start">
                <input type="submit" class="btn btn-sm btn-primary me-2" value="Simpan">
                <button type="button" class="btn btn-sm btn-success me-2" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
            </div>
        </form>
        </div>
</div>
</div>

<?php include "layouts/footer.php" ?>