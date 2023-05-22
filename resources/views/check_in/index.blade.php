@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Data Check In </h3>
            </div>
            <hr>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('check_in.create') }}" style="float:right;">Tambah Check In <i class="fa-sharp fa-solid fa-add"></i></a>
            </div>
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
            <h6 class="m-0 font-weight-bold text-primary">Data Check In</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr  style="text-align:center;">
                            <th>No.</th>
                            <th>Type Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Jumblah Tamu</th>
                            <th>Tanggal Check In</th>
                            {{-- <th>Tanggal Check Out</th> --}}
                            <th>Payment</th>
                            <th width="112px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkins as $checkin)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $checkin->type_kamar }}</td>
                                <td>{{ $checkin->nama_tamu }}</td>
                                <td>{{ $checkin->jumlah_tamu }}</td>
                                <td>{{ $checkin->tgl_cekin }}</td>
                                <td>{{ $checkin->payment }}</td>
                                <td>
                                    <form action="{{ route('check_in.destroy',$checkin->id) }}" method="POST">
                                        @csrf
                                        @if(Auth::user()->role !='user')
                                        {{-- <a class="btn btn-primary" href="{{ route('check_in.edit',$checkin->id) }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a> --}}
                                        <a class="btn btn-success" href="{{ route('check_in.edit',$checkin->id) }}">
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                        </a>
                                        @endif
                                        @csrf
                                        @if(Auth::user()->role !='user')
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                        @endif
                                    </form>
                                </td>
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
{{-- {!! $users->links() !!} --}}

@endsection

@section('title')
Check In
@stop