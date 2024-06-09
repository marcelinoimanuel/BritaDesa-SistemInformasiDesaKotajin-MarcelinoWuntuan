<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRITA Desa - Data Desa</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/vendro/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/vendro/fontawesome/css/solid.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/vendor/css/style.css">
</head>

<body>
    <section id="data_desa">
        <div class="header text-center justify-content-center align-items-center">
            <div>
                <h1 class="mt-2">Data Desa<br><span>KOTAJIN UTARA</span></h1>
            </div>
        </div>
        <div class="container-lg text-center mt-5 mb-5">
            <div class="row row-cols-2 mt-2">
                <div class="col mt-5">
                    <img src="assets/vendor/img/icon penduduk.png" width="184px" alt="" class="ms-5">
                    <?php if(isset($_SESSION["login"]) == true) : ?>
                        <h1 contenteditable="true">1002</h1>
                    <?php else: ?>
                        <h1>1002</h1>
                    <?php endif; ?>
                    <span>Jumlah penduduk</span>
                </div>
                <div class="col mt-5">
                    <img src="assets/vendor/img/icon pria.png" width="165px" alt="" class="ms-5">
                    <?php if(isset($_SESSION["login"]) == true) : ?>
                        <h1 contenteditable="true">505</h1>
                    <?php else: ?>
                        <h1>505</h1>
                    <?php endif; ?>
                    <span>Jumlah penduduk laki-laki</span>
                </div>
                <div class="col mt-3">
                    <img src="assets/vendor/img/icon keluarga.png" width="179px" alt="" style="padding-left: 8px;" class="ms-5">
                    <?php if(isset($_SESSION["login"]) == true) : ?>
                        <h1 contenteditable="true">299</h1>
                    <?php else: ?>
                        <h1>299</h1>
                    <?php endif; ?>
                    <span>Jumlah keluarga</span>
                </div>
                <div class="col mt-3">
                    <img src="assets/vendor/img/icon wanita.png" width="170px" alt="" class="ms-5">
                    <?php if(isset($_SESSION["login"]) == true) : ?>
                        <h1 contenteditable="true">497</h1>
                    <?php else: ?>
                        <h1>497</h1>
                    <?php endif; ?>
                    <span>Jumlah penduduk perempuan</span>
                </div>
            </div>
        </div>
    </section>
<br><br>
    <section id="pekerjaan" class="mb-2 mt-5">
        <div class="header">
            <h1 class="ms-4 text-white fw-bold">PEKERJAAN</h1>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="kotak row row-cols-3">
                <div class="col-6 col-md-4 work">
                    <div class="container-work">
                        <?php if(isset($_SESSION["login"]) == true) : ?>
                            <span contenteditable="true">9 <br> PNS</span>
                        <?php else: ?>
                            <span>9 <br> PNS</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 work">
                    <div class="container-work">
                        <?php if(isset($_SESSION["login"]) == true) : ?>
                            <span contenteditable="true">3 <br> TUKANG</span>
                        <?php else: ?>
                            <span>3 <br> TUKANG</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 work">
                    <div class="container-work">
                        <?php if(isset($_SESSION["login"]) == true) : ?>
                            <span contenteditable="true">97 <br> PETANI</span>
                        <?php else: ?>
                            <span>97 <br>PETANI</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 work">
                    <div class="container-work">
                        <?php if(isset($_SESSION["login"]) == true) : ?>
                            <span contenteditable="true">60 <br> NELAYAN</span>
                        <?php else: ?>
                            <span>60 <br> NELAYAN</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 work">
                    <div class="container-work">
                        <?php if(isset($_SESSION["login"]) == true) : ?>
                            <span contenteditable="true">25 <br> PEDAGANG</span>
                        <?php else: ?>
                            <span>25 <br>PEDAGANG</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 work">
                    <div class="container-work">
                        <?php if(isset($_SESSION["login"]) == true) : ?>
                            <span contenteditable="true">350 <br> LAINNYA</span>
                        <?php else: ?>
                            <span>350 <br> LAINNYA</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="agama">
        <div class="header">
            <h1 class="ms-4 mt-2 text-white fw-bold">AGAMA</h1>
        </div>
        <div class="container text-center d-flex justify-content-center align-items-center">
            <div class="row justify-content-around">
                <div class="col">
                    <div class="circle-wrapper">
                        <div class="circle">
                            <div class="content" style="font-weight: bold">
                                99%<span>ISLAM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="circle-wrapper">
                        <div class="circle">
                            <div class="content" style="font-weight: bold">
                                1%<span>KRISTEN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pendidikan">
        <div class="header-pendidikan">
            <div class="row justify-content-between">
                <div class="col-4">
                    <p class="text-start text-white fw-bold ps-4">FASILITAS PENDIDIKAN</p>
                </div>
                <div class="col-4">
                    <p class="text-end text-white fw-bold pe-4">FASILITAS KESEHATAN</p>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col">
                    <img src="assets/vendor/img/logo TK.png" width="200px" alt="">
                    <h1 class="pe-5">2</h1>
                    <span class="pe-5">Taman Kanak-kanak</span>
                </div>
                <div class="col-3 ms-3">
                    <img src="assets/vendor/img/logo SD.png" width="120px" alt="">
                    <h1>1</h1>
                    <span>Sekolah Dasar</span>
                </div>
                <div class="col">
                    <img src="assets/vendor/img/logo posyandu.png" width="210px" alt="">
                    <h1>1</h1>
                    <span>Pos Layanan Terpadu</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="pb-3 mt-5">
        <div class="container">
            <div class="row justify-content-start pt-4">
                <div class="col-md-3 text-start">
                    <h2>Desa KOTAJIN UTARA</h2>
                    <p class="lh-sm">W466+6C<span>4</span> , Jl. Trans Sulawesi, Kotajin Utara, <br>
                        kec. Atinggola, Kab. Gorontalo Utara, <br> Gorontalo, Indonesia</p>
                    <h5>KODE POST 96253</h5>
                </div>
                <div class="col-3">
                    <h3>Hubungi Kami :</h3>
                    <ul>
                        <li><span><a href="mailto: britadesa.kotajinutara@gmail.com" class="text-decoration-none text-white"><i
                                        class="fa-solid fa-envelope"></i>
                                    britadesa.kotajinutara@gmail.com</a></span></li>
                        <li><span><a href="#" class="text-decoration-none text-white"><i
                                        class="fa-brands fa-whatsapp"></i>
                                    08xxxxxxxxxx</a></span></li>
                    </ul>
                </div>
                <div class="col-3 text-start">
                    <h4>Jam Kerja :</h4>
                    <p>Senin s.d Jumat : 08.00 - 17.00 WITA</p>
                </div>
                <div class="col-3">
                    <img src="assets/vendor/img/barcode lokasi kotajin(ProfilDesaPage).png" width="168px" alt="">
                    <p class="mt-1" style="color: #ef8112; text-shadow: 0 0 10px rgb(0, 0, 0);">Scan untuk melihat lokasi</p>
                </div>
            </div>
        </div>

        <!-- <span class="icons">
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-sort-up fa-5x"></i>
            </a>
        </span> -->
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>

    <!-- fontawesome -->
    <script src="assets/vendor/fontawesome/js/all.js"></script>
    <script src="assets/vendor/fontawesome/js/brands.js"></script>
    <script src="assets/vendor/fontawesome/js/solid.js"></script>

</body>

</html>