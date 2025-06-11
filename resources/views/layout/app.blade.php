@extends('layout.clean')

@section('childContent')
@include('layout.partials.header')
@yield('content')
@hasSection('footerLinks')
@include('layout.partials.footer')
@endif
@endsection
