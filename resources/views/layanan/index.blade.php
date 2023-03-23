@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Pilih Menu Layanan </h3>
            </div>
            <hr>
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-dark">klik pada icon</h6>
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
                        <div class="col mr-5">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" class="kamar">
                                FOOD</div>
                            <div class="h2 mb-6 font-weight-bold text-gray-900">
                            </div>
                        </div>
                    </form> 
                    <div class="col-auto">
                        <a href=
                        {{-- "{{ route('layanan.food') }}" --}}
                        ><i class="fas fa-utensils fa-2x text-gray-300"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <form action="#" POST>
                        <div class="col mr-5">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" class="kamar">
                                DRINK</div>
                            <div class="h2 mb-6 font-weight-bold text-gray-900">
                            </div>
                        </div>
                    </form> 
                    <div class="col-auto">
                        <a href="#"><i class="fas fa-wine-glass fa-2x text-gray-300"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <form action="#" POST>
                        <div class="col mr-5">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" class="kamar">
                                SEAFOOD</div>
                            <div class="h2 mb-6 font-weight-bold text-gray-900">
                            </div>
                        </div>
                    </form> 
                    <div class="col-auto">
                        <a href="#"><i class="fas fa-fish fa-2x text-gray-300"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>

<!-- Content Row -->
        </div>
    </div>
</div>

@endsection

@section('title')
Layanan
@stop