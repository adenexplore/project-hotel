@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Data Check Out</h3>
            </div>
            <hr>
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
            <h6 class="m-0 font-weight-bold text-primary">Data Check Out</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Type kamar</th>
                            <th>Nama Tamu</th>
                            <th>Jumblah Tamu</th>
                            <th>Tanggal Check In</th>
                            <th>Tanggal Check Out</th>
                            <th>Payment</th>
                            <th width="112px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkouts as $checkout)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $checkout->type_kamar }}</td>
                                <td>{{ $checkout->nama_tamu }}</td>
                                <td>{{ $checkout->jumlah_tamu }}</td>
                                <td>{{ $checkout->tgl_cekin }}</td>
                                <td>{{ $checkout->tgl_cekout }}</td>
                                <td>{{ $checkout->payment }}</td>
                                <td>
                                    <a class="btn btn-danger" href="#">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </a>
                                    {{-- <form action="{{ route('check_out.destroy',$checkout->id) }}" method="POST">
                                        @csrf
                                        @if(Auth::user()->role !='user')
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                        </button>
                                        @endif
                                    </form> --}}
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
Check out
@stop