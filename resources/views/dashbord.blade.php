@extends('template')
@section('container')
{{ session('success') }}
<h1>{{__('lang.This is dashbord')}}</h1>
@endsection