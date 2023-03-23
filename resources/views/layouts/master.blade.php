<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Boboyuk |@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('assets2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {{-- <script src="https://cdn.tiny.cloud/1/i62phsrg4132j4da2r91942mcx3wfzykskhlfuoqa7khhqn5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css"') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets2/img/b.png')}}">
    <style>
        
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-10">
                   <img src="{{ asset('assets2/img/icon.png')}}" alt="icon" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">BOBOYUK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            

            <!-- Nav Item - Dashboard -->
            <li class="{{ request()->is(strtolower(Auth::user()->role)) ? 'active' : '' }} nav-item">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard {{ Auth::user()->role }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Navigation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                    <i class="fa-solid fa-key"></i>
                    <span>Check In / Check Out </span>
                </a>
                <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Check</h6>
                        <a class="collapse-item" href="/check_in">Check In</a>
                        <a class="collapse-item" href="/check_out">Check Out</a>
                        <a class="collapse-item" href="/booking">Rencana/Booking</a>
                        {{-- <a class="collapse-item" href="/tamu">Tamu In-House</a> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-sharp fa-solid fa-server"></i>                    
                    <span>Room Service</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Room</h6>
                        <a class="collapse-item" href="/layanan">Pesan Layanan / Product</a>
                        {{-- <a class="collapse-item" href="/cleanroom">Pembersihan Kamar</a> --}}
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            @if(Auth::user()->role !='Operator')
             <!-- Heading -->
             <div class="sidebar-heading">
                Administrasi Hotel
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThere" aria-expanded="true" aria-controls="collapseThere">
                    <i class="fas fa-fw fa-person-booth"></i>
                    <span>Kamar</span>
                </a>
                <div id="collapseThere" class="collapse" aria-labelledby="headingThere" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Kamar</h6>
                        <a class="collapse-item" href="/lihat_kamar">Lihat Kamar</a>
                        <a class="collapse-item" href="/type_kamar">Tipe Kamar</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-sliders"></i>
                    <span>Layanan</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Layanan</h6>
                        <a class="collapse-item" href="/layanan">Lihat Layanan</a>
                        <a class="collapse-item" href="/kategori_layanan">Kategori Layanan</a>
                        <a class="collapse-item" href="/kategori_layanan">Laundry</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku Tamu</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Buku Tamu</h6>
                        <a class="collapse-item" href="/tamu">Lihat Tamu</a>
                    </div>
                </div>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Manager</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom User</h6>
                        <a class="collapse-item" href="/add_user">Lihat User</a>
                    </div>
                </div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    <i class="fas fa-fw fa-list-check"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Laporan</h6>
                        <a class="collapse-item" href="/laporan">Lihat Laporan</a>
                    </div>
                </div>
            </li>
        @endif
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <br>
                <div class="container">
                    <section class="content">
                        @yield('content')
                    </section>
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Hotel Wikrama 2023 </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets2/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('assets2/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Datatables -->

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets2/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets2/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets2/js/demo/datatables-demo.js') }}"></script>

    {{-- ck editor --}}
    <script type="text/javascript" src="{{ asset('assets2/ckeditor/ckeditor.js') }}"></script>


    {{-- inputan --}}
    <script src="{{ asset('assets2/js/input.js') }}"></script>

    <!-- Custom styles for this page -->
    <script src="{{ asset('assets2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    @yield('cjs')

</body>

</html>
