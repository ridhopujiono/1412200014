<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li class="myaccount"><a href="#"><span>My Account</span></a></li>
                        <li class="header_cart hidden-xs"><a href="#"><span>My Cart</span></a></li>
                        <li class="check"><a href="#"><span>Checkout</span></a></li>
                        <li class="login"><a href="#"><span>Login</span></a></li>
                    </ul>
                </div>
                <!-- /.cnt-account -->


                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a style="
                        color: white;
                        font-weight: bold;
                        font-family: inherit;
                        font-size: 28px;
                    " href="home.html"> <img src="resources/assets/images/logo4.png" alt="logo" style="
                        width: 60px;
                    "> idho Olshop </a> </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#"></a>
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <div class="basket-item-count"><span class="count">2</span></div>
                                    <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value">$4580</span> </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image"> <a href="detail.html"><img src="resources/assets/images/products/p4.jpg" alt=""></a> </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                                    </div>
                                </div>
                                <!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <?php
                                if ($active == "index") : ?>
                                    <li class='active dropdown'> <a href="index.php">Home</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="index.php">Home</a> </li>
                                <?php endif; ?>
                                <?php
                                if ($active == "product") : ?>
                                    <li class='active dropdown'> <a href="product.php">Product</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="product.php">Product</a> </li>
                                <?php endif; ?>

                                <?php
                                if ($active == "cart") : ?>
                                    <li class='active dropdown'> <a href="cart.php">Cart</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="cart.php">Cart</a> </li>
                                <?php endif; ?>
                                <?php
                                if ($active == "checkout") : ?>
                                    <li class='active dropdown'> <a href="checkout.php">Checkout</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="checkout.php">Checkout</a> </li>
                                <?php endif; ?>
                                <?php
                                if ($active == "login") : ?>
                                    <li class='active dropdown'> <a href="login.php">Login</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="login.php">Login</a> </li>
                                <?php endif; ?>
                                <?php
                                if ($active == "konversi") : ?>
                                    <li class='active dropdown'> <a href="konversi.php">Konversi</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="konversi.php">Konversi</a> </li>
                                <?php endif; ?>
                                <?php
                                if ($active == "mahasiswa") : ?>
                                    <li class='active dropdown'> <a href="mahasiswa.php">Mahasiswa</a> </li>
                                <?php else : ?>
                                    <li class='dropdown'> <a href="mahasiswa.php">Mahasiswa</a> </li>
                                <?php endif; ?>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>