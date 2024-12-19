<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Livro</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="brand">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            </div>

            <div class="form-group">
                <label for="gender">Gênero</label>
                <input type="text" class="form-control" id="gender" name="gender" value="{{ $book->gender }}" required>
            </div>

            <div class="form-group">
                <label for="year">Ano</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $book->year }}" required>
            </div>

            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
