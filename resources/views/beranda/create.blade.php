<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>create</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
        <br><br><br><br><br><br><br>
        <center><h1>BOOKING ROOM</h1></center>
        <div class="container">   
            <form action="{{ route('beranda.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Type Kamar</strong>
                            <br>
                            <select class="form-control" name="type_kamar" aria-label="Default select example" id="">
                                    <option selected>Pilih Type Kmar</option>
                                    <option value="superrior">Superriror</option>
                                    <option value="standard"> Standar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Anda</strong>
                            <input type="text" name="nama_tamu" placeholder="isi nama anda" class="form-control datetimepicker-input" >
                        </div>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jumlah Tamu</strong>
                            <br>
                            <select class="form-control" name="jumlah_tamu" aria-label="Default select example" id="">
                                <option selected>Jumlah Tamu</option>
                                <option value="1">Adult 1</option>
                                <option value="2">Adult 2</option>
                                <option value="3">Adult 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal</strong>
                        <br>
                        <input type="date" name="tgl_booking" class="form-control datetimepicker-input" >
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            
            </form>
        </div>
        {{-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                            <div class="col-md-10">
                            <form action="{{ route('beranda.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="row g-2">
                                        <div class="col-md-3">
                                            <div class="date" id="date1" data-target-input="nearest">
                                                <select class="form-select" name="type_kamar" id="">
                                                    <option selected>Pilih Type Kmar</option>
                                                    <option value="superrior">Superriror</option>
                                                    <option value="standard"> Standar</option>
                                                </select>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div >
                                                <input type="text" name="nama_tamu" placeholder="isi nama anda" class="form-control datetimepicker-input" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select" name="jumlah_tamu">
                                                <option selected>Jumlah Tamu</option>
                                                <option value="1">Adult 1</option>
                                                <option value="2">Adult 2</option>
                                                <option value="3">Adult 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="date" id="date2" data-target-input="nearest">
                                                <input type="text" name="tgl_boking" class="form-control datetimepicker-input" placeholder="klik tgl booking" data-target="#date2" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary w-100" >Submit</button>
                                        </div>
                                </div>                         
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div> --}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>   