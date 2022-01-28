
<?php $__env->startSection('container'); ?>
<!-- end header -->
<section class="slider_section">
   <div class="banner_main">
      <div class="container">
         <div class="row d_flex">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
               <div class="text-bg">
                  <h1>Jewellery</h1>
                  <span>Free Multipurpose Responsive <br>
                     <strong class="land_bold">Landing Page 2019</strong></span>
                  <a href="#">Contact Us</a>
               </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
               <div class="text-img">
                  <figure><img src="<?php echo e(asset('resources/images/img.png')); ?>" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>

</div>
</header>
<!-- Best  -->
<div id="jewellery" class="Best">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Best jewellery</h2>
               <p> a reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="best_main">
               <div class="row d_flex">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                     <div class="best_text">
                        <p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="#">See More</a>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                     <div class="best_img">
                        <h4>Best Design Of Ring</h4>
                        <figure><img src="<?php echo e(asset('resources/images/beimg.png')); ?>"></figure>
                     </div>
                  </div>
               </div>
            </div>
            <div class="best_main">
               <div class="row d_flex">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                     <div class="best_img croos_rt">
                        <h4>Best Design Of Ring</h4>
                        <figure><img src="<?php echo e(asset('resources/images/beimg2.png')); ?>"></figure>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                     <div class="best_text flot_left">
                        <p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="#">See More</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="best_main pa_bot">
               <div class="row d_flex">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                     <div class="best_text">
                        <p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="#">See More</a>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                     <div class="best_img d_none">
                        <h4>Best Design Of Ring</h4>
                        <figure><img src="<?php echo e(asset('resources/images/beimg3.png')); ?>"></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end Best -->
<!-- contact -->
<div id="product" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Produk Saya</h2>
               <p> Berikut ini adalah produk yang saya tawarkan </p>
            </div>
         </div>
      </div>
      <div class="row">
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-md-4">
            <div class="card" style="">
               <img src="<?php echo e(url('admin/images/products')); ?>/<?php echo e($d->foto); ?>" class="card-img-top" alt="...">
               <div class="card-body">
                  <h4><?php echo e($d->nama_produk); ?></h4>
                  <h5>Rp. <?php echo e($d->harga_produk); ?></h5>
                  <p class="card-text"><?php echo e($d->deskripsi_produk); ?>.</p>
               </div>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>
</div>
<!-- end contact -->
<!-- clients -->
<div id="clients" class="clients ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our Clients</h2>
               <p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a </p>
            </div>
         </div>
      </div>
      <div class="row d_flex">
         <div class="col-md-10 offset-col-md-1">
            <div id="myCarousel" class="carousel slide clients_slider" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                 <div class="img_box">
                                    <i><img src="<?php echo e(asset('resources/images/icon_1.png')); ?>" alt="#" /></i>
                                    <figure><img src="<?php echo e(asset('resources/images/clients.png')); ?>" alt="#" /></figure>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                 <div class="joe">
                                    <h3>Joe elik</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                 <div class="img_box">
                                    <i><img src="<?php echo e(asset('resources/images/icon_1.png')); ?>" alt="#" /></i>
                                    <figure><img src="<?php echo e(asset('resources/images/clients.png')); ?>" alt="#" /></figure>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                 <div class="joe">
                                    <h3>Joe elik</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="row d_flex">
                              <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                 <div class="img_box">
                                    <i><img src="<?php echo e(asset('resources/images/icon_1.png')); ?>" alt="#" /></i>
                                    <figure><img src="<?php echo e(asset('resources/images/clients.png')); ?>" alt="#" /></figure>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                 <div class="joe">
                                    <h3>Joe elik</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end clients -->
<!--  footer -->
<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="call_now2">
                  <h3>Free Multipurpose Responsive </h3>
                  <span>Landing Page 2019</span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="call_now">
                  <h3>Call Now</h3>
                  <span>(+1)1234567890</span>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
         </div>
      </div>
   </div>
</footer>
<!-- end footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yordan\resources\views/index.blade.php ENDPATH**/ ?>