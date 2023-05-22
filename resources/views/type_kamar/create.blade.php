@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Type Kamar</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('type_kamar.index') }}">kembali</a>
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

<form action="{{ route('type_kamar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type Kamar</strong>
                {{-- <input type="text" name="type_kamar" class="form-control" placeholder="Type Kamar">   --}}
                <select name="type_kamar" id="" class="form-control">
                    <option value="superrior">superrior</option>
                    <option value="delux">delux</option>
                    <option value="reguller">reguller</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga</strong>
                <input type="text" name="harga" class="form-control" placeholder="harga">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi</strong>
                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                {{-- <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi ">   --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

@section('title')
Create Type Kamar
@stop