<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWD</title>
    <!-- My Own Styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
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
            <div class="col-md-12">
                <h1 class="animate__animated animate__fadeInUp">ASTON BANYUWANGI</h1>
                <p class="animate__animated animate__fadeInUp">
                    Enjoy your holiday with the Aston Banyuwangi Hotel
                </p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function updateHargakamar() {
        nilai = Number(document.getElementById("nama-kamar").value);
        elementHargaKamar = document.getElementById("harga-kamar");
        harga = 0;

        if (nilai == 1) {
            harga = 100000;
        } else if (nilai == 2) {
            harga = 200000;
        } else if (nilai == 3) {
            harga = 350000;
        }

        // console.log(nilai);
        // alert(harga);
        elementHargaKamar.value = harga;
    }

    function updateDiskon() {
        dis = Number(document.getElementById("durasi").value);
        elementDiskon = document.getElementById("diskon");
        diskonan = 0;

        if (dis > 3) {
            diskonan = 10;
        }

        elementDiskon.value = diskonan;
    }

    function handleBreakfast(cb) {
        breakfest = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = cb.checked ? 80000 : 0;
    }

    function hitung() {
        updateDiskon();

        var hargaKamar = document.getElementById("harga-kamar").value; // ID "harga-kamar"
        var hargaLayanan = document.getElementById("harga-layanan").value;
        var hari = document.getElementById("durasi").value;

        hargaKamar = parseInt(hargaKamar) || 0;
        hargaLayanan = parseInt(hargaLayanan) || 0;
        hari = parseInt(hari) || 0;

        var jumlah = hargaKamar * hari;
        if (hari > 3) {
            var diskon = jumlah * 0.1;
            jumlah -= diskon;
        }


        var jumlahLayanan = hargaLayanan * hari;
        var jumlahTagihan = jumlah + jumlahLayanan 
        //lama menginap lebih dari 3 hari diskom

        //tampilkan diskon saat form pemesanan
        //

        document.getElementById("total-diskon").value = diskon;
        document.getElementById("total-harga-kamar").value = jumlah;
        document.getElementById("total-layanan").value = jumlahLayanan;
        document.getElementById("total-pembayaran").value = jumlahTagihan;

    }

</script>

</html>