
<?php $__env->startSection('container'); ?>
<link rel="stylesheet" href="<?php echo e(asset('admin/vendors/simple-datatables/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('admin/vendors/toastify/toastify.css')); ?>">
<style>
    .btn-hapus:hover {
        opacity: 0.7;
    }

    .badge {
        cursor: pointer;
    }
</style>
<div class="page-content">

    <section class="row">

        <div class="data_jml">
            <section class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon bg-warning">
                                        <i class="bi bi-cart" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Produk</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($data_count['total_produk']); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="bi bi-person" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">total pengguna</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($data_count['total_pengguna']); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="bi bi-cart-check" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">barang tersedia</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($data_count['total_tersedia']); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon bg-danger">
                                        <i class=" bi bi-cart-x" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold" style="font-size: 13px;">habis</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($data_count['total_habis']); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="row">
                <div class="col">
                    <h3>Produk terbaru</h3>

                    <div class="row">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo e(url('admin/images/products')); ?>/<?php echo e($d->foto); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php echo e(Str::limit($d->deskripsi_produk, 75, '.......')); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>
        </div>


</div>

<script src="<?php echo e(asset('admin/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('admin/vendors/toastify/toastify.js')); ?>"></script>

<?php if(session('berhasil_hapus')): ?>
<script>
    let msg = "<?php echo e(session('berhasil_hapus')); ?>";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
<?php elseif(session('gagal_hapus')): ?>
<script>
    let msg = "<?php echo e(session('gagal_hapus')); ?>";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
<?php elseif(session('berhasil_update_status')): ?>
<script>
    let msg = "<?php echo e(session('berhasil_update_status')); ?>";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
<?php elseif(session('gagal_update_status')): ?>
<script>
    let msg = "<?php echo e(session('gagal_update_status')); ?>";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>


<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yordan\resources\views/admin/index.blade.php ENDPATH**/ ?>