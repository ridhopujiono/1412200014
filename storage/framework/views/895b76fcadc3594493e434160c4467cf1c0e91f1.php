<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body style="background-color: #157ed2;">




    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-md-5 my-auto">
                <center>

                    <a href="" style="
                            color: white;
                            font-weight: bold;
                            font-family: inherit;
                            font-size: 28px; text-decoration: none; text-align: center;
                        ">
                        <img src="<?php echo e(asset('resources/assets/images/logo4.png')); ?>" alt="" width="70px">
                        idho Olshop

                    </a>
                </center>
                <div class="card mt-3 login-user" style="border-radius: 15px;">
                    <div class="p-4 text-center">
                        <h4>Login Member</h4>
                    </div>


                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <?php if(session('error_lp')): ?>
                                <div class="alert alert-danger">
                                    Data anda salah
                                </div>
                                <?php endif; ?>
                                <form action="<?php echo e(url('auth_member')); ?>" method="POST" name="login_member">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group mt-3">
                                        <button class="btn btn-primary w-100 mb-3" type="submit">
                                            Login
                                        </button>
                                        <div class="w-100 mx-auto text-center">
                                            atau
                                        </div>
                                        <a class="btn text-primary w-100 mb-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            Login Admin (CRUD)
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-start <?php echo e(session('error_admin') ? 'show' : ''); ?>" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="offcanvas-header" style="
                    padding: unset;
                    padding-bottom: 23px;
                    padding-top: 10px;
                    ">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Login Admin</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <?php if(session('error_admin')): ?>
                    <div class="alert alert-danger">
                        Data anda salah
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo e(url('auth_admin')); ?>" method="POST" name="login_admin">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary w-100 mb-3" type="submit">
                                Login
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\crud_web\resources\views/welcome.blade.php ENDPATH**/ ?>