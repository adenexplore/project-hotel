@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Check In</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('check_in.index') }}">Kembali</a>
        </div>
    </div>
</div>

<br>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('check_in.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type kamar</strong>
                <br>
                <select class="form-control" name="type_kamar" aria-label="Default select example" id="">
                    <option value=""> -- Pilih nomor kamar -- </option>
                    <option value="superrior">superrior</option>
                    <option value="delux">delux</option>
                    <option value="reguller">reguller</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <input type="text" name="nama_tamu" class="form-control" placeholder="Nama Tamu">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Tamu</strong>
                <input type="text" name="jumlah_tamu" class="form-control" placeholder="jumlah tamu">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check In</strong>
                <input type="date" name="tgl_cekin" class="form-control" placeholder="Tanggal Check in">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check Out</strong>
                <input type="date" name="tgl_cekout" class="form-control" placeholder="Tanggal Check Out">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Payment</strong>
                <select class="form-control" name="payment" aria-label="Default select example" id="">
                    <option value=""> -- Pilih nomor Payment -- </option>
                    <option value="dana">Dana</option>
                    <option value="ovo">Ovo</option>
                    <option value="gopay">Gopay</option>
                </select> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

@section('title')
Create Cek In
@stop