@extends('layouts.header')

@section('content')

<form action="{{url('books/')}}" method="POST" enctype="multipart/form-data" class="">
    @csrf
    {{method_field('PATCH')}}
    @include('books.form')

</form>

@endsection
