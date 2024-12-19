<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Carro</h1>
        <form action="{{ route('cars.update', $car->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}" required>
            </div>

            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}" required>
            </div>

            <div class="form-group">
                <label for="year">Ano</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}" required>
            </div>

            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $car->price }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
