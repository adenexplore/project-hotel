@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Check In</h2>
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

<form action="{{ route('check_in.update',$checkin->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type Kamar</strong>
                <select class="form-control" name="nomor_kamar" aria-label="Default select example" id="">
                    <option value="supperrior" @if ($checkin->type_kamar == 'supperrior') selected @endif>supperrior</option>
                    <option value="delux" @if ($checkin->type_kamar == 'delux') selected @endif>delux</option>
                    <option value="reguller" @if ($checkin->type_kamar == 'reguller') selected @endif>reguller</option>
                   
                </select>            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <input type="text" name="nama_tamu" class="form-control" placeholder="Lang" value="{{$checkin->nama_tamu}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Tamu</strong>
                <input type="text" name="jumlah_tamu" class="form-control" placeholder="jumlah tamu" value="{{$checkin->jumlah_tamu}}">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check In</strong>
                <input type="date" name="tgl_cekin" class="form-control" placeholder="Tanggal Check in" value="{{$checkin->tgl_cekin}}">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check Out</strong>
                <input type="date" name="tgl_cekout" class="form-control" placeholder="Tanggal Check Out" value="{{$checkin->tgl_cekout}}">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Payment</strong>
                <select class="form-control" name="payment" aria-label="Default select example" id="">
                    <option value="dana" @if ($checkin->payment == 'dana') selected @endif>Dana</option>
                    <option value="ovo" @if ($checkin->payment == 'ovo') selected @endif>Ovo</option>
                    <option value="gopay" @if ($checkin->payment == 'gopay') selected @endif>Gopay</option>
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
Edit Check In
@stop