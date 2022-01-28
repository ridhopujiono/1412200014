<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Aj</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?php echo e(asset('resources/css/bootstrap.min.css')); ?>">
   <!-- style css -->
   <link rel="stylesheet" href="<?php echo e(asset('resources/css/style.css')); ?>">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?php echo e(asset('resources/css/responsive.css')); ?>">
   <!-- fevicon -->
   <link rel="icon" href="<?php echo e(asset('resources/images/fevicon.png')); ?>" type="image/gif')}}" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?php echo e(asset('resources/css/jquery.mCustomScrollbar.min.css')); ?>">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/<?php echo e(asset('resources/css/font-awesome.css')); ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="<?php echo e(asset('resources/images/loading.gif')); ?>" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header-top">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="<?php echo e(asset('resources/images/logo.png')); ?>" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="index.html">Home</a> </li>
                                 <li> <a href="#jewellery">jewellery</a> </li>
                                 <li> <a href="#product">Product</a> </li>
                                 <li> <a href="#clients">Our Clients</a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->


         <?php echo $__env->yieldContent('container'); ?>


         <!-- Javascript files-->
         <script src="<?php echo e(asset('resources/js/jquery.min.js')); ?>"></script>
         <script src="<?php echo e(asset('resources/js/popper.min.js')); ?>"></script>
         <script src="<?php echo e(asset('resources/js/bootstrap.bundle.min.js')); ?>"></script>
         <script src="<?php echo e(asset('resources/js/jquery-3.0.0.min.js')); ?>"></script>
         <script src="<?php echo e(asset('resources/js/plugin.js')); ?>"></script>
         <!-- sidebar -->
         <script src="<?php echo e(asset('resources/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
         <script src="<?php echo e(asset('resources/js/custom.js')); ?>"></script>
         <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\yordan\resources\views/template/main.blade.php ENDPATH**/ ?>