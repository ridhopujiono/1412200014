<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>{{$title}}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.svg')}}" type="image/x-icon">
</head>
<style>
    .dataTable-info {
        display: none;
    }

    .sidebar-wrapper .menu .sidebar-item.active .sidebar-link {
        background-color: #3bad3c;
    }
</style>

<body style="
    background: #c5edbe73;
">
    <audio id="myAudio">
        <source src="{{asset('admin/message_notify.mp3')}}" type="audio/mpeg">
    </audio>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header" style="padding-bottom: 0">
                    <div class="d-flex">

                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu" style="margin-top: -20px;">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{ ($active == 'dashboard') ? 'active' : '' }} ">
                            <a href="{{url('dashboard')}}" class='sidebar-link link_dashboard'>
                                <i class="bi bi-grid-fill"></i>

                                <span>Dashboard </span>

                            </a>
                        </li>
                        <li class="sidebar-item {{ ($active === 'manajemen_produk') ? 'active' : '' }} {{ ($active === 'detail_edit') ? 'active' : '' }} ">
                            <a href="{{url('manajemen_produk')}}" class='sidebar-link link_manajemen_produk'>
                                <i class="bi bi-cart"></i>

                                <span>Manajemen Produk</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ ($active === 'logout') ? 'active' : '' }} ">
                            <a href="{{url('logout')}}" class='sidebar-link'>
                                <i class="bi bi-arrow-bar-left"></i>

                                <span>Keluar</span>
                            </a>
                        </li>




                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('container')

            <!-- Modal -->
            <div class="modal fade" id="modal_edit_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('ubah_password')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="password">Masukan Password Baru</label>
                                    <input type="text" id="password" class="form-control" name="password" autofocus="true" placeholder="Password baru">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('berhasil_update_password'))
    <script>
        let msg = "{{session('berhasil_update_password')}}";
        Toastify({
            text: msg,
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "#4fbe87",
        }).showToast();
    </script>
    @elseif(session('gagal_update_password'))
    <script>
        let msg = "{{session('gagal_update_password')}}";
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
    <script src="{{asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('admin/js/main.js')}}"></script>



</body>

</html>