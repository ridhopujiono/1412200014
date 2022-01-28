
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

    <div class="row p-4">
        <div class="alert alert-success">Anda dapat meng-edit dengan menekan tombol dikanan <button class="btn btn-light float-end btn-edit"><span class="bi bi-pencil"></span>edit</button></div>

        <form action="<?php echo e(url('update_data')); ?>/<?php echo e($data->id_produk); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" placeholder="Isikan nama produk" value="<?php echo e($data->nama_produk); ?>">
            </div>
            <div class="form-group">
                <label for="">Jenis Produk <?php echo e($data->jenis); ?></label>
                <select name="jenis_produk" class="form-control" id="">
                    <?php switch($data->jenis):
                    case ("celana"): ?>
                    <option value="celana" selected>Celana</option>
                    <option value="kaos">Kaos</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="sepatu">Sepatu</option>
                    <?php break; ?>
                    <?php case ("kaos"): ?>
                    <option value="kaos" selected>Kaos</option>
                    <option value="celana">Celana</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="sepatu">Sepatu</option>
                    <?php break; ?>
                    <?php case ("kemeja"): ?>
                    <option value="kaos">Kaos</option>
                    <option value="celana">Celana</option>
                    <option value="kemeja" selected>Kemeja</option>
                    <option value="sepatu">Sepatu</option>
                    <?php break; ?>

                    <?php case ("sepatu"): ?>
                    <option value="kaos">Kaos</option>
                    <option value="celana">Celana</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="sepatu" selected>Sepatu</option>
                    <?php break; ?>
                    <?php endswitch; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Jumlah Produk</label>
                <input type="text" class="form-control" name="jumlah_produk" placeholder="Isikan jumlah produk" value="<?php echo e($data->jumlah_produk); ?>">
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="text" class="form-control" name="harga_produk" placeholder="Isikan harga produk" value="<?php echo e($data->harga_produk); ?>">
            </div>
            <div class="form-group">
                <label for="">Berat Produk (GRAM)</label>
                <input type="text" class="form-control" name="berat_produk" placeholder="Isikan berat produk" value="<?php echo e($data->berat); ?>">
            </div>
            <div class="form-group">
                <label for="">Deskrpisi Produk</label>
                <textarea type="text" class="form-control" name="deskripsi_produk" placeholder="Isikan deskripsi produk" value="<?php echo e($data->deskripsi_produk); ?>"><?php echo e($data->deskripsi_produk); ?>"</textarea>
            </div>

            <div class="form-group">
                <label for="">Foto Produk</label><br>
                <img src="<?php echo e(url('admin/images/products')); ?>/<?php echo e($data->foto); ?>" width="300px" alt=""><br>
                <input type="file" class="form-control mt-2" name="foto_produk">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>

    </div>




</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(() => {
        $(".form-control").attr('disabled', true);

        $(".btn-edit").on("click", () => {
            $(".form-control").attr('disabled', false);
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_web\resources\views/admin/detail_edit.blade.php ENDPATH**/ ?>