@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Checkout </h2>
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

<form action="{{ route('check_out.store') }}"  method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <select name="nama_tamu" id="id_tamu" class="form-control search">
                    <option selected></option>
                    @foreach($checkin as $row)
                        <option data-kamar="{{ $row->type_kamar }}" data-jumlah="{{ $row->jumlah_tamu }}" data-tgl_in="{{ $row->tgl_cekin }}" data-tgl_out="{{ $row->tgl_cekout }}" data-payment="{{ $row->payment }}"   {{ $row->nama_tamu == old('nama_tamu') ? 'selected' : '' }} value="{{$row->nama_tamu}}">
                        {{ $row->nama_tamu}}
                        </option>
                    @endforeach
                </select>    
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type Kamar</strong>
                <input type="text" name="type_kamar" class="form-control" id="kamar" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Tamu</strong>
                <input type="text" name="jumlah_tamu" class="form-control" id="jumlah" readonly >  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check In</strong>
                <input type="date" name="tgl_cekin" class="form-control"  id="tgl_in" readonly >  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check Out</strong>
                <input type="date" name="tgl_cekout" class="form-control"  id="tgl_out" readonly >  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Payment</strong>
                <input type="text" name="payment" class="form-control" id="bayar" readonly> 
            </div>
        </div>
        <h2> tambahan</h2>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Makanan</strong>
                <input type="text" name="makanan" class="form-control">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Minuman</strong>
                <input type="text" name="minuman" class="form-control">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Seafood</strong>
                <input type="text" name="seafood" class="form-control">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Laundry</strong>
                <input type="text" name="laundry" class="form-control">  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script>
    const id_tamu = document.querySelector('#id_tamu')
    const kamar = document.querySelector('#kamar')
    const jumlah = document.querySelector('#jumlah')
    const tgl_in = document.querySelector('#tgl_in')
    const tgl_out = document.querySelector('#tgl_out')
    const payment = document.querySelector('#payment')

    id_tamu.addEventListener('change', (e) => {
        const type_kamar = e.target.options[e.target.selectedIndex].getAttribute('data-kamar')
        kamar.value = type_kamar
    })
    id_tamu.addEventListener('change', (e) => {
        const jumlah_tamu = e.target.options[e.target.selectedIndex].getAttribute('data-jumlah')
        jumlah.value = jumlah_tamu
    })
    id_tamu.addEventListener('change', (e) => {
        const tgl_cekin = e.target.options[e.target.selectedIndex].getAttribute('data-tgl_in')
        tgl_in.value = tgl_cekin
    })
    id_tamu.addEventListener('change', (e) => {
        const tgl_cekout = e.target.options[e.target.selectedIndex].getAttribute('data-tgl_out')
        tgl_out.value = tgl_cekout
    })
    id_tamu.addEventListener('change', (e) => {
        const payment = e.target.options[e.target.selectedIndex].getAttribute('data-payment')
        bayar.value = payment
    })
</script>
@endsection

@section('title')
Hitung Checkout
@stop