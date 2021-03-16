@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/home.css')}}">
@endsection

@section('title', 'Home')

@section('content')
<img src="{{ asset('/img/library.png') }}" alt="">
@endsection
