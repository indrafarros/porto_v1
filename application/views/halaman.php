<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8d40d8cdfa.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Sriracha&family=Staatliches&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/mystyle.css'); ?>">
    <!-- AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script>
        $(window).scroll(function() {
            /* affix after scrolling 100px */
            if ($(document).scrollTop() > 100) {
                $('.navbar').addClass('affix');
            } else {
                $('.navbar').removeClass('affix');
            }
        });
    </script>
    <title><?= $title; ?> </title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-lg">
        <a class="navbar-brand ml-4 font-weight-bold" href="<?= base_url(); ?>">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#aboutme">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#porto">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Header-->

    <div class="container-fluid text-center" id="header">
        <div class="row justify-content-center header">
            <div class="col-lg-12" data-aos-anchor-placement="top-bottom" data-aos="zoom-in">
                <img src="<?= base_url('assets/images/foto.jpg'); ?>" class="rounded-circle shadow-lg bg-white rounded" alt="">
            </div>
            <div class="col-lg-10 justify-content-center" data-aos-duration="2000" data-aos-delay="200" data-aos-anchor-placement="bottom-bottom" data-aos="fade-up">
                <br>
                <h4>Hi,
                </h4>
            </div>
            <div class="col-lg-10 justify-content-center" data-aos-duration="2000" data-aos-delay="400" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
                <h4 class="mt-2">Nama saya Indra Mochamad Farros</h4><br>
                <hr>
                <p>"Saya lulusan dari Univeristas Komputer Indonesia (UNIKOM). Junior Web Developer yang memiliki minat di bidang back-end web developer, Saya telah menyelesaikan beberapa proyek dan berharap terus untuk memperluas pengetahuan saya dan menciptakan lebih banyak karya."</p>
            </div>
        </div>
    </div>

    <div class="buttonscroll" data-aos-delay="550" data-aos-duration="2000" data-aos-anchor-placement="top-bottom" data-aos="zoom-in-up">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#aboutme" class="btn btn-outline-danger rounded-pill" style="width: 190px;">FIND ABOUT ME</a>
                </div>
            </div>
        </div>
        <div id="aboutme"></div>
    </div>
    <div class="about">
        <div class="container-fluid" data-aos-delay="300" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="btop mx-auto mt-5">
                    </div>
                    <h2>About Me</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid resume">
        <div class="resumebg" data-aos-delay="300" data-aos="zoom-in">
            <div class="row keahlian">
                <div class="col-md-6">
                    <h4 class="bg-primary rounded"><i class="fas fa-globe ml-3"></i> Keahlian</h4>
                    <div class="mt-3 text-center">
                        <img alt="" src="<?= base_url('assets/images/html.png'); ?>"></img>
                        <img alt="" src="<?= base_url('assets/images/css.png'); ?>"></img>
                        <img alt="" src="<?= base_url('assets/images/btp.png'); ?>"></img>
                        <img alt="" src="<?= base_url('assets/images/js.png'); ?>"></img><br>
                        <img alt="" src="<?= base_url('assets/images/php.png'); ?>"></img>
                        <img alt="" src="<?= base_url('assets/images/codeigniter.png'); ?>"></img><br>
                        <img alt="" src="<?= base_url('assets/images/mysql.png'); ?>"></img>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="bg-primary rounded"><i class="fas fa-clock ml-3"></i> Pengalaman Kerja</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <p style="margin: 10px;"> 2018<br>08-09<br>
                            </p>
                        </div>
                        <div class="col-md-9">
                            <p class="mt-2"> PT. Telekomunikasi Indonesia WITEL Bandung
                            </p>
                            <p style="margin: 5px;"> - Access Data Management</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row keahlian">
                <div class="col-md-6">
                    <h4 class="bg-primary rounded"><i class="fas fa-school ml-3"></i> Pendidikan</h4>
                    <p class="mt-4" style="margin: 10px;"><i class="fas fa-graduation-cap"></i> 2020 - Sistem Informasi, Universitas Komputer Indonesia</p>
                    <p style="margin: 10px;"><i class="fas fa-graduation-cap"></i> 2015 - SMA Korpri Bekasi</p>
                </div>
                <div class="col-md-6">
                    <h4 class="bg-primary rounded"><i class="far fa-file-alt ml-3"></i> Seritifikat</h4>
                    <div class="p-3">
                        <p> -> Junior Web Developer BNSP (Badan Nasional Sertifikasi Profesi), 2019. <a href=""> (Lihat)</a>
                        </p>
                        <p> -> Sertifikat Toefl dari English Department, Universitas Komputer Indonesia. (Skor : 483)<a href=""> (Lihat)</a>
                        </p>
                        <p> -> Sertifikasi Magang PT. Telekomunikasi Indonesia, Tbk Witel Bandung.<a href=""> (Lihat)</a></p>
                    </div>
                </div>
            </div>
            <div id="porto"></div>
        </div>
    </div>
    <!-- Portofolio -->
    <div class="about mb-5">
        <div class="container-fluid" data-aos-delay="300" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <div class="btop mx-auto">
                    </div>
                    <h2>Portofolio</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid porto2 mt-4">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="card  shadow-lg p-3 mb-5 rounded">
                    <div class="card-body">
                        <div class="card mb-3 mt-3" data-aos-delay="500" data-aos="fade-right">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets/images/online.png'); ?>" height="200px" width="190px">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mb-4 font-weight-bold">Online Shop</p>
                                        <p><a href="" class="btn btn-sm btn-outline-dark disabled">Codeigniter</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">Ajax</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">Javascript</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">MySQL</a>
                                        </p>
                                        <div class="text-left mt-4">
                                            <a type="button" class="badge badge-warning text-light" data-toggle="modal" data-target="#modalKamera">
                                                Detail
                                            </a>
                                            <a target="_blank" rel="noopener noreferrer" href="http://pet.indrafarros.my.id" class="badge badge-primary">Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-3" data-aos-delay="500" data-aos="fade-right">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="assets/images/inventori.png" height="200px;" width="190px" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mb-4 font-weight-bold">Inventori Toko Buku</p>
                                        <p><a href="#" class="btn btn-sm btn-outline-dark disabled">Codeigniter 3</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">Javascript</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">Ajax</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">MySQL</a>
                                        </p>
                                        <div class="text-left mt-4">
                                            <a type="button" class="badge badge-warning text-light" data-toggle="modal" data-target="#modalInventori">
                                                Detail
                                            </a>
                                            <!-- <a href="#" class="badge badge-primary">Demo</a> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-3" data-aos-delay="500" data-aos="fade-right">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets/images/mycath.png'); ?>" height="200px" width="190px">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mb-4 font-weight-bold">Pemesanan Catering Online</p>
                                        <p><a href="" class="btn btn-sm btn-outline-dark disabled">Bootstrap</a>
                                        </p>
                                        <div class="text-left mt-4">
                                            <a type="button" class="badge badge-warning text-light" data-toggle="modal" data-target="#modalCath">
                                                Detail
                                            </a>
                                            <a href="#" class="badge badge-primary">Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-3" data-aos-delay="500" data-aos="fade-right">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="assets/images/apotek/login.png" height="200px;" width="190px" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mb-4 font-weight-bold">Sistem Informasi Apotek</p>
                                        <p><a href="#" class="btn btn-sm btn-outline-dark disabled">Java SE</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">MySQL</a>
                                        </p>
                                        <div class="text-left mt-4">
                                            <a type="button" class="badge badge-warning text-light" data-toggle="modal" data-target="#modalApotek">
                                                Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-3" data-aos-delay="500" data-aos="fade-right">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="assets/images/webgis.png" height="200px;" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mb-4 font-weight-bold">Sistem Informasi Geografis Pemetaan UMKM dan Pendaftaran Pelatihan</p>
                                        <p><a href="#" class="btn btn-sm btn-outline-dark disabled">PHP Native</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">Javascript</a>
                                            <a href="" class="btn btn-sm btn-outline-dark disabled">MySQL</a>
                                        </p>
                                        <div class="text-left mt-4">
                                            <a type="button" class="badge badge-warning text-light" data-toggle="modal" data-target="#modalGis">
                                                Detail
                                            </a>
                                            <a target="_blank" rel="noopener noreferrer" href="http://gis.indrafarros.my.id" class="badge badge-primary">Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Kontak -->
    <div class="container-fluid kontak bg-info" id="kontak">
        <h2 class="text-light">Kontak</h2>
        <hr>
        <div class="row">
            <div class="col-md-6 text-light mt-5">

                <p><i class="fas fa-home"></i> Bekasi</p>
                <p><i class="fas fa-phone-square-alt"></i> +6285155065353 </p>
                <p><i class="far fa-envelope"></i> indrafarros.fi@gmail.com </p>
                <p><i class="fab fa-github"></i> @indrafarros</p>

            </div>
            <div class="col-md-6 text-light">
                <div class="card" style="width: 26rem;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <div class="card-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.696313074464!2d107.04213275!3d-6.240774300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698efc8f857aef%3A0xd574f2224a94130c!2sJl.%20Bumi%20Sani%20Permai%20No.2%2C%20Setiamekar%2C%20Kec.%20Tambun%20Sel.%2C%20Bekasi%2C%20Jawa%20Barat%2017510!5e0!3m2!1sid!2sid!4v1593926062956!5m2!1sid!2sid" class="embed-responsive-item" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-->
    <footer class="bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pt-3 font-weight-bold text-light">© Indra All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <!--JS Bootstrap-->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalGis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">WebGis Pemetaan UMKM dan Pendaftaran Pelatihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="<?= base_url('assets/images/webgis.png'); ?>" class="card-img-top" alt="...">
                        <br>
                    </div>
                    <div class="col-md-6">
                        <h3>Deskripsi :</h3>
                        <p>Merupakan hasil dari pengerjaan skripsi kuliah, dimana saya membuat webgis untuk memetakan umkm disalah satu kecamatan di Bandung dan juga memecahkan masalah dalam melakukan pendaftaran pelatihan pada kecamatan tersebut.</p>
                        <p>Teknologi yang digunakan pada pembuatan web ini adalah PHP Native, LeafletJS menggunakan OSM sebagai Map untuk ditampilkan dan untuk penyimpan data menggunakan MySQL</p>
                        <div class="text-center mt-3">
                            <img alt="" src="<?= base_url('assets/images/php.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/js.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/mysql.png'); ?>" style=" width: 20%; height: 40px;"></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalApotek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistem Informasi APotek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="<?= base_url('assets/images/apotek/kasir.png'); ?>" class="card-img-top" alt="...">
                        <br>
                    </div>
                    <div class="col-md-6">
                        <h3>Deskripsi :</h3>
                        <p>membuat aplikasi apotek dengan 3 role user. Memili modul kasir, gudang dan admin</p>
                        <div class="mt-3">
                            <p><a href="#" class="btn btn-sm btn-outline-dark disabled">Java SE</a>
                                <a href="" class="btn btn-sm btn-outline-dark disabled">MySQL</a>
                                <a href="" class="btn btn-sm btn-outline-dark disabled">iReport</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCath" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Landing Page Cathering</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="<?= base_url('assets/images/mycath.png'); ?>" class="card-img-top" alt="...">
                        <br>
                    </div>
                    <div class="col-md-6">
                        <h3>Deskripsi :</h3>
                        <p>Membuat tampilan web </p>
                        <div class="text-center mt-3">
                            <img alt="" src="<?= base_url('assets/images/php.png'); ?>" style=" width: 20%; height: 40px;"></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalKamera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pet Shop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="<?= base_url('assets/images/online.png'); ?>" class="card-img-top" alt="...">
                        <br>
                    </div>
                    <div class="col-md-6">
                        <h3>Deskripsi :</h3>
                        <p>Menggunakan Codeigniter 3, MySQL API untuk mengetahui ongkos kirim</p>
                        <div class="text-center mt-3">
                            <img alt="" src="<?= base_url('assets/images/php.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/codeigniter.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/js.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/mysql.png'); ?>" style=" width: 20%; height: 40px;"></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalInventori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inventori Toko Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="<?= base_url('assets/images/inventori-produk.png'); ?>" class="card-img-top" alt="...">
                        <br>
                    </div>
                    <div class="col-md-6">
                        <h3>Deskripsi :</h3>
                        <p>Menggunakan Codeigniter 3</p>
                        <div class="text-center mt-3">
                            <img alt="" src="<?= base_url('assets/images/php.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/codeigniter.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/js.png'); ?>" style=" width: 20%; height: 40px;"></img>
                            <img alt="" src="<?= base_url('assets/images/mysql.png'); ?>" style=" width: 20%; height: 40px;"></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</html>