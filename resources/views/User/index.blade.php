@extends('layouts.header')

@section('content')

<h1>index usuario</h1>

<button class="btn btn-info" type="submit" onclick="window.location.href='{{url('User/create')}}'">CREAR NUEVO USUARIO</button>

<table class="table">

    <thead>
        <th scope="col">Documento</th>
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">ACCIONES</th>
    </thead>
    <tbody>

        @foreach ($Users as $User)

        <tr>
            <td scope="row">{{$User->id}}</td>
            <td scope="row">{{$User->name}}</td>
            <td scope="row">{{$User->Telefono}}</td>
            <td scope="row">{{$User->email}}</td>
            <td scope="row" style="display: flex">
                <a href="{{url('User/' . $User->id . '/edit')}}" class="btn btn-info">EDITAR</a>
                <form action="{{url('User/' . $User->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}

                    <button class="btn btn-danger" type="submit">ELIMINAR</button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>

</table>

@endsection
