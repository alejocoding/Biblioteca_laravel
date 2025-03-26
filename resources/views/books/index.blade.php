@extends('layouts.header')

@section('content')

    <button type="submit" class="btn btn-success" onclick="window.location.href='{{url('books/create')}}'">
        Agregar Nuevo Libro
    </button>
    <br>

    <h1 class="tittle">SECCION DE LIBRITOS</h1>



    <table class="table">

        <thead>
            <th scope="col">Serial</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre_libro</th>
            <th scope="col">Cantidades</th>
            <th scope="col">Copias_prestadas</th>
            <th scope="col">ACCIONES</th>
        </thead>
        <tbody>

            @foreach ($books as $book)

            <tr>
                <td scope="row">{{$book->id}}</td>
                <td scope="row"><img src="{{asset('storage').'/'. $book->foto}}" alt="" width="35px"></td>
                <td scope="row">{{$book->Nombre_libro}}</td>
                <td scope="row">{{$book->stock}}</td>
                <td scope="row">{{$book->copias_prestadas}}</td>
                <td scope="row" style="display: flex">
                    <a href="{{url('books/' . $book->id . '/edit')}}" class="btn btn-info">EDITAR</a>
                    <form action="{{url('books/' . $book->id)}}" method="POST">
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
