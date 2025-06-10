@extends('layout.clean')

@section('childContent')
@include('layout.partials.header')
@yield('content')
@include('layout.partials.footer')
@endsection
