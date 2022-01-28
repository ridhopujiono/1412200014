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

    .form-group label {
        color: #4fbe87;
        font-weight: 600;
    }
</style>
<div class="page-content">

    <section class="row">
        <div class="col">
            <button class="btn-tambah btn btn-primary rounded-pill mb-3"><span class="fw-bold">+</span> tambah produk</button>
        </div>
        <div class="col-12">
            <div class="card form-tambah">
                <div class="">
                    <div class="container">
                        <div class="row p-4">
                            <div class="alert alert-success">Silahkan input produk</div>

                            <form action="{{url('input_data')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk" placeholder="Isikan nama produk">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Produk</label>
                                    <select name="jenis_produk" class="form-control" id="">
                                        <option value="celana">Celana</option>
                                        <option value="kaos">Kaos</option>
                                        <option value="kemeja">Kemeja</option>
                                        <option value="sepatu">Sepatu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Produk</label>
                                    <input type="text" class="form-control" name="jumlah_produk" placeholder="Isikan jumlah produk">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Produk</label>
                                    <input type="text" class="form-control" name="harga_produk" placeholder="Isikan harga produk">
                                </div>
                                <div class="form-group">
                                    <label for="">Berat Produk (GRAM)</label>
                                    <input type="text" class="form-control" name="berat_produk" placeholder="Isikan berat produk">
                                </div>
                                <div class="form-group">
                                    <label for="">Deskrpisi Produk</label>
                                    <textarea type="text" class="form-control" name="deskripsi_produk" placeholder="Isikan deskripsi produk"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Produk</label>
                                    <input type="file" class="form-control" name="foto_produk">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card table-content">
                <div class="card-header">
                    <h4 class="card-title">Manajemen Produk</h4>
                </div>

                <div class="card-content">



                    <div class="table-responsive px-5 pb-5 ">
                        <table class="table table-hover mb-0" id="table_transaksi">
                            <thead class="table-primary">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA PRODUK</th>
                                    <th>JUMLAH</th>
                                    <th>HARGA</th>
                                    <th>STATUS</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$d->nama_produk}}</td>
                                    <td>{{$d->jumlah_produk}}</td>
                                    <td>{{$d->harga_produk}}</td>
                                    <td>
                                        @if($d->jumlah_produk > 0)
                                        <div class="badge rounded-pill bg-primary">masih</div>
                                        @else
                                        <div class="badge rounded-pill bg-danger">habis</div>
                                        @endif
                                    </td>
                                    <td>
                                        <style>
                                            a:hover {
                                                color: white;
                                            }
                                        </style>
                                        <a href="{{url('detail_edit')}}/{{$d->id_produk}}" class="badge rounded-pill bg-secondary">detail / edit</a>
                                        <a class="badge rounded-pill bg-danger btn-hapus" data-user="{{$d->id_produk}}">hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>

<script src="{{asset('admin/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('admin/vendors/toastify/toastify.js')}}"></script>

@if(session('berhasil_hapus'))
<script>
    let msg = "{{session('berhasil_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('gagal_hapus'))
<script>
    let msg = "{{session('gagal_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@elseif(session('berhasil_update'))
<script>
    let msg = "{{session('berhasil_update')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('!berhasil_update'))
<script>
    let msg = "{{session('!berhasil_update')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@elseif(session('berhasil_insert'))
<script>
    let msg = "{{session('berhasil_insert')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('!berhasil_insert'))
<script>
    let msg = "{{session('!berhasil_insert')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@endif

<script>
    $(document).ready(function() {
        $(".form-tambah").hide();
        let x = false;
        $(".btn-tambah").click(function() {
            if (x == false) {
                $(".form-tambah").show();

                x = true;
            } else {
                $(".form-tambah").hide();
                x = false;
            }
        });

        $(".btn-hapus").on("click", (e) => {
            let id = $(e.target).attr("data-user");
            let url = "{{url('delete_data')}}/" + id;
            if (confirm("Anda yakin ingin menghapus produk ini ?")) {
                $.ajax({
                    url: url,
                    method: "GET",
                    success: () => {
                        window.location.reload();
                    },
                    error: (err) => {
                        console.log(err)
                    }
                });
            }
        });

    });
</script>


@endsection