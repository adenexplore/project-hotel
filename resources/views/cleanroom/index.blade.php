@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Clean Room</h3>
            </div>
            <hr>
        </div>
    </div>
</div>
        <!-- Content Row -->
 <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <form action="#" POST>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" class="kamar">
                                Kamar Exsecutiv</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            </div>
                        </div>
                    </form> 
                    <div class="col-auto">
                        <a href="#"><i class="fas fa-bed fa-2x text-gray-300"></i></a>
                    </div>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm center">Kamar Kotor</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <form action="#" POST>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Kamar Standard</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            </div>
                        </div>
                    </form>
                    <div class="col-auto">
                        <a href="#"><i class="fas fa-bed fa-2x text-gray-300"></i></a>
                    </div>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm center">5 kamar kosong dari 20 kamar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <form action="#" POST>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kamar Normal
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </form>
                    <div class="col-auto">
                        <a href="#"><i class="fas fa-bed fa-2x text-gray-300"></i></a>
                    </div>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm center">25 kamar kosong dari 25 kamar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->



@endsection

@section('title')
clean room
@stop

