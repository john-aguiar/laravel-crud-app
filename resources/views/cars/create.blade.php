<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastrar Carro</h1>
        <form action="{{ route('cars.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>

            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>

            <div class="form-group">
                <label for="year">Ano</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('cars.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>
</html>
