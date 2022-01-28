@extends('template.admin.main')
@section('container')
<link rel="stylesheet" href="{{asset('admin/vendors/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendors/toastify/toastify.css')}}">
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

        <form action="{{url('update_data')}}/{{$data->id_produk}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" placeholder="Isikan nama produk" value="{{$data->nama_produk}}">
            </div>
            <div class="form-group">
                <label for="">Jenis Produk {{$data->jenis}}</label>
                <select name="jenis_produk" class="form-control" id="">
                    @switch($data->jenis)
                    @case("celana")
                    <option value="celana" selected>Celana</option>
                    <option value="kaos">Kaos</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="sepatu">Sepatu</option>
                    @break
                    @case("kaos")
                    <option value="kaos" selected>Kaos</option>
                    <option value="celana">Celana</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="sepatu">Sepatu</option>
                    @break
                    @case("kemeja")
                    <option value="kaos">Kaos</option>
                    <option value="celana">Celana</option>
                    <option value="kemeja" selected>Kemeja</option>
                    <option value="sepatu">Sepatu</option>
                    @break

                    @case("sepatu")
                    <option value="kaos">Kaos</option>
                    <option value="celana">Celana</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="sepatu" selected>Sepatu</option>
                    @break
                    @endswitch
                </select>
            </div>
            <div class="form-group">
                <label for="">Jumlah Produk</label>
                <input type="text" class="form-control" name="jumlah_produk" placeholder="Isikan jumlah produk" value="{{$data->jumlah_produk}}">
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="text" class="form-control" name="harga_produk" placeholder="Isikan harga produk" value="{{$data->harga_produk}}">
            </div>
            <div class="form-group">
                <label for="">Berat Produk (GRAM)</label>
                <input type="text" class="form-control" name="berat_produk" placeholder="Isikan berat produk" value="{{$data->berat}}">
            </div>
            <div class="form-group">
                <label for="">Deskrpisi Produk</label>
                <textarea type="text" class="form-control" name="deskripsi_produk" placeholder="Isikan deskripsi produk" value="{{$data->deskripsi_produk}}">{{$data->deskripsi_produk}}"</textarea>
            </div>

            <div class="form-group">
                <label for="">Foto Produk</label><br>
                <img src="{{url('admin/images/products')}}/{{$data->foto}}" width="300px" alt=""><br>
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

@endsection