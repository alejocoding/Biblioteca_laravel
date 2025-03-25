


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bilioteca Aurora</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/008/513/521/small/stack-of-books-illustration-png.png" alt="Libros" width="52">
            <h1> B_AURORA</h1>
        </div>

        <nav class="links">
            <a href="/">INICIO</a>
            <a href="books">LIBROS</a>
            <a href="Prestamo">PRESTAMOS</a>
            <a href="User">USUARIOS</a>
        </nav>
    </header>

    <main class="main">

        @yield('content')


    </main>

</body>
</html>
