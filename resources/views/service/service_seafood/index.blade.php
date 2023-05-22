@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="center">
                <center><h2> Seafood Service</h2></center>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <hr>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('service_seafood.create') }}" style="float:right;">Add Seafood <i class="fa-sharp fa-solid fa-add"></i></a>
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
            <h6 class="m-0 font-weight-bold text-primary">Seafood Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr  style="text-align:center;">
                            <th>No.</th>
                            <th>Seafood Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th width="112px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services_seafood as $service)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $service->seafood_name }}</td>
                                <td>{{ $service->quantity }} pcs</td>
                                <td>{{ $service->price }}</td>
                                <td>
                                    <form action="{{ route('service_seafood.destroy',$service->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('service_seafood.edit',$service->id) }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        @csrf
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
@endsection

@section('title')
Service Seafood
@stop