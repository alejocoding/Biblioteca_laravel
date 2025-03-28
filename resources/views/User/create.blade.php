@extends('layouts.header')

@section('content')

<h1>CREAR USUARIO</h1>

    <form action="{{url('User')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('User.form')
    </form>

@endsection
