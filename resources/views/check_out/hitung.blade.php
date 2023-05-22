@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Check Out</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('check_out.index') }}">Kembali</a>
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

<form action="{{route('check_out.update', $checkin->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type Kamar</strong>
                <input class="form-control" type="text" name="type_kamar" value="{{$checkin->type_kamar}}" readonly>          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <input class="form-control" type="text" name="nama_tamu" value="{{$checkin->nama_tamau}}" readonly>          
            </div>
        </div>
        
    </div>

</form>
@endsection

@section('title')
Check Out
@stop