@extends('layouts.header')

@section('content')

<form action="{{url('books')}}" method="POST" enctype="multipart/form-data" class="">
    @csrf

    @include('books.form')

</form>

@endsection
