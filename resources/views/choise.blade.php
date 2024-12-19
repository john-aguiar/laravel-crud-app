<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center bg-light" style="height: 100vh;">
    <div class="text-center">
        <h1>Escolha uma das opcoes</h1>

        <button class="btn btn-primary text-light btn-lg mx-2">
            <a class="text-light" href="{{route('cars.index')}}" >Site de Carros</a>
        </button>

        <button class="btn btn-secondary text-light btn-lg mx-2">
            <a class="text-light" href="{{route('books.index')}}">Site de livros</a>
        </button>
    </div>
</body>
</html>
