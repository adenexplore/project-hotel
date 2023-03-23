@extends('layouts.master')

@section('content')

<h1>cek</h1>
@endsection

@section('title')
Dashboard {{ Auth::user()->role }} 
@stop

