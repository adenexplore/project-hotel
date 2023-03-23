@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Data Booking </h3>
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
            <h6 class="m-0 font-weight-bold text-primary">Data Booking</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Type Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Jumblah Tamu</th>
                            <th>Tanggal</th>
                            <th width="112px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $booking->type_kamar }}</td>
                                <td>{{ $booking->nama_tamu }}</td>
                                <td>{{ $booking->jumlah_tamu }}</td>
                                <td>{{ $booking->tgl_booking }}</td>
                                <td>
                                    <form action="{{ route('booking.destroy',$booking->id) }}" method="POST">
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
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
Booking
@stop