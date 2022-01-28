<?php
$cart = [];
$data = file_get_contents('data/product.json');
$data2 = file_get_contents('data/product.json');
$data_produk = json_decode($data);
$data_produk = $data_produk->data;
$isi_cart = [];


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
    $_SESSION["url"] = "checkout";
    ?>
    <?php include('template/header.php'); ?>



    <style>
        .homebanner-holder {
            width: 100%;
        }
    </style>
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content">
        <div class="container" style="padding: 50px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form action="">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Kota</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Propinsi</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Wa</label>
                            <input type="text" class="form-control">
                        </div>

                    </form>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="shopping-cart">
                        <div class="shopping-cart-table ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-description item">Image</th>
                                            <th class="cart-product-name item">Product Name</th>
                                            <th class="cart-sub-total item">Subtotal</th>
                                        </tr>
                                    </thead><!-- /thead -->

                                    <tbody>
                                        <?php foreach ($_SESSION["cart_id"] as $ci) : ?>
                                            <tr>
                                                <td class="cart-image">
                                                    <a class="entry-thumbnail" href="detail.html">
                                                        <img src="resources/assets/images/products/<?= $ci["foto"] ?>" alt="">
                                                    </a>
                                                </td>
                                                <td class="cart-product-name-info">
                                                    <h4 class='cart-product-description'><a href="detail.html"><?= $ci["nama_produk"] ?></a></h4>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="rating rateit-small"></div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="reviews">
                                                                (06 Reviews)
                                                            </div>
                                                        </div>
                                                    </div><!-- /.row -->
                                                    <div class="cart-product-info">
                                                        <span class="product-color">COLOR:<span>Blue</span></span>
                                                    </div>
                                                </td>
                                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rp. <?= $ci["harga"] ?></span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody><!-- /tbody -->


                                </table><!-- /table -->
                            </div>

                        </div><!-- /.shopping-cart -->
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class=" btn btn-primary btn-block">Checkout</button>
                    </div>
                </div>
                <!-- /.row -->



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
        </div>
        <!-- /#top-banner-and-menu -->

        <!-- ============================================== INFO BOXES ============================================== -->

        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->

        <!-- ============================================================= FOOTER ============================================================= -->
        <?php include('template/footer.php'); ?>
        <!-- ============================================================= FOOTER : END============================================================= -->

        <!-- For demo purposes – can be removed on production -->

        <!-- For demo purposes – can be removed on production : End -->

        <!-- JavaScripts placed at the end of the document so the pages load faster -->
        <script src="resources/assets/js/jquery-1.11.1.min.js"></script>
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