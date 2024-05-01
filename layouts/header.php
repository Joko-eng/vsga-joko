<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWD</title>
    <!-- My Own Styles -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet" />
</head>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <img src="assets/image/bwi.png" class="img-fluid" alt="Banyuwangi">
            </div>
            <div class="col-md-9">
                <h1 class="animate__animated animate__fadeInUp">Banyuwangi</h1>
                <p class="animate__animated animate__fadeInUp">
                    Kabupaten ujung timur dari pulau Jawa, dan sering disebut sebagai Sunrise of Java.
                </p>
            </div>

            <div class="col-md-2 mt-md-4">
                <img src="assets/image/wdf.png" class="img-fluid" alt="Banyuwangi">
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    // function updateHargaPaket(){
    //     nilai = document.getElementById("nama-paket").value;
    //   //console.log(nilai);
    //  alert(nilai);
    // penginapan = false;
    // transportasi =false;
    // konsumsi = false;



    penginapan = false;
    transportasi = false;
    konsumsi = false;

    function updateHargaPaket() {
        nilai = Number(document.getElementById("nama-paket").value);
        elementHargaPaket = document.getElementById("harga-paket");
        harga = 0;

        if (nilai == 1) {
            harga = 500000;
        } else if (nilai == 2) {
            harga = 750000;
        } else if (nilai == 3) {
            harga = 1000000;
        } else if (nilai == 4) {
            harga = 1250000;
        }

        // console.log(nilai);
        // alert(harga);
        elementHargaPaket.value = harga;
    }

    function handlePenginapan(cb) {
        penginapan = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = hitungLayanan();
    }

    function handleTransportasi(cb) {
        transportasi = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = hitungLayanan();
    }

    function handleKonsumsi(cb) {
        konsumsi = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = hitungLayanan();
    }

    function hitungLayanan() {
        totalLayanan = 0;

        if (penginapan) {
            totalLayanan = totalLayanan + 300000;
        }
        if (transportasi) {
            totalLayanan = totalLayanan + 200000;
        }
        if (konsumsi) {
            totalLayanan = totalLayanan + 150000;
        }
        // alert(totalLayanan);
        return totalLayanan;
    }

    function hitung() {

        var hargaPaket = document.getElementById("harga-paket").value; // Misalkan hargaPaket diambil dari elemen dengan ID "harga-paket"
        var jumlahPeserta = document.getElementById("jumlah-orang").value;
        var hargaLayanan = document.getElementById("harga-layanan").value;
        var hari = document.getElementById("durasi").value;

        // Pastikan konversi ke integer berhasil, jika tidak, default ke 0
        hargaPaket = parseInt(hargaPaket) || 0;
        jumlahPeserta = parseInt(jumlahPeserta) || 0;
        hargaLayanan = parseInt(hargaLayanan) || 0;
        hari = parseInt(hari) || 0;

        var jumlahTagihan = (hargaPaket * jumlahPeserta) + (hargaLayanan * jumlahPeserta * hari);

        document.getElementById("total-pembayaran").value = jumlahTagihan;

    }
</script>

</html>