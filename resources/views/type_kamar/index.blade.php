@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="center">
                <center><h2> Type Kamar</h2></center>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <hr>
            @if(Auth::user()->role !='Operator')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('type_kamar.create') }}" style="float:right;">Tambah Kamar <i class="fa-sharp fa-solid fa-add"></i></a>
            </div>
            @endif
        </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;">
                            <th>No.</th>
                            <th>Type Kamar</th>
                            <th>Harga Permalam</th>
                            <th>Deskripsi</th>
                            @if(Auth::user()->role !='Operator')
                            <th width="112px">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typekamars as $typekamar)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $typekamar->type_kamar }}</td>
                                <td>Rp.{{ $typekamar->harga }}</td>
                                <td>{{ $typekamar->deskripsi }}</td>
                                @if(Auth::user()->role !='Operator')
                                <td>
                                    <form action="{{ route('type_kamar.destroy',$typekamar->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('type_kamar.edit',$typekamar->id) }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection

@section('title')
Type Kamar
@stop