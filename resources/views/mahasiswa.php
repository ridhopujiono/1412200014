<?php

include("data/db/koneksi.php");
$query = 'SELECT * FROM `mahasiswa`';
$data = mysqli_query($db, $query);
$data_fetch = mysqli_fetch_assoc($data);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ridho Pujiono">
    <meta name="keywords" content="Ridho Olshop">
    <meta name="robots" content="all">
    <title>Ridho Olshop</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="resources/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="resources/assets/css/main.css">
    <link rel="stylesheet" href="resources/assets/css/blue.css">
    <link rel="stylesheet" href="resources/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="resources/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="resources/assets/css/animate.min.css">
    <link rel="stylesheet" href="resources/assets/css/rateit.css">
    <link rel="stylesheet" href="resources/assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="resources/assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <?php
    session_start();
    $_SESSION["url"] = "mahasiswa";
    ?>
    <?php include('template/header.php'); ?>




    <style>
        .homebanner-holder {
            width: 100%;
        }
    </style>
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content">
        <div class="container">

            <div class="row mt-5">

                <div class="col-12" style="background-color: #fff; padding: 10px">
                    <a href="tambah_mahasiswa.php" class="btn btn-primary mb-5" style="margin-bottom: 20px;">Tambah Mahasiswa</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No. Hp</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $d["npm"]; ?></td>
                                        <td><?= $d["nama"]; ?></td>
                                        <td><?= $d["alamat"]; ?></td>
                                        <td><?= $d["jenis_kelamin"]; ?></td>
                                        <td><?= $d["no_hp"]; ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-edit" href="edit_mahasiswa.php?npm=<?= $d['npm']; ?>">Edit</a>
                                            <a href="hapus_mahasiswa.php?npm=<?= $d['npm']; ?>" class=" btn btn-danger"><span class="fa fa-trash"></span> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

    <!-- ============================================== INFO BOXES ============================================== -->

    <!-- /.info-boxes -->
    <!-- ============================================== INFO BOXES : END ============================================== -->

    <!-- ============================================================= FOOTER ============================================================= -->
    <?php include('template/footer.php'); ?>
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->





    <!-- Modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="proses_edit_mahasiswa.php">

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="text" class="form-control" name="npm">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin">
                        </div>
                        <div class="form-group">
                            <label for="">No. HP</label>
                            <input type="text" class="form-control" name="no_hp">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-simpan-edit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="resources/assets/js/bootstrap.min.js"></script>
    <script src="resources/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="resources/assets/js/owl.carousel.min.js"></script>
    <script src="resources/assets/js/echo.min.js"></script>
    <script src="resources/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="resources/assets/js/bootstrap-slider.min.js"></script>
    <script src="resources/assets/js/jquery.rateit.min.js"></script>
    <script src="resources/assets/js/lightbox.min.js"></script>
    <script src="resources/assets/js/bootstrap-select.min.js"></script>
    <script src="resources/assets/js/wow.min.js"></script>
    <script src="resources/assets/js/scripts.js"></script>
</body>



</html>