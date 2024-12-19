{{-- <!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <title>Meus Livros</title>
  </head>

  <body>
    <div class=" container-fluid">
      <header class="mb-5 border-bottom">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">My Book Review</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Meus livros</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    books
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('books.index')}}">Ver todos</a></li>
                    <li><a class="dropdown-item" href="{{route('books.create')}}">Cadastrar novo</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>

            </div>
          </div>
        </nav>
      </header>
      <main>
        <form action="{{route('books.store')}}" method="POST">
            @csrf
            <h2>Novo Livro</h2>
            <div class="row col-8 d-flex flex-column">
              <div class="col-5">
                <input type="hidden" name="id" value="{{$book->id ?? ''}}">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
              </div>
              <div class="col-3">
                <label for="gender" class="form-label">Gênero:</label>
                <input type="text" class="form-control" name="gender" id="gender">
              </div>
              <div class="col-5">
                <label for="year" class="form-label">Ano:</label>
                <input type="number" class="form-control" name="year" id="year">
              </div>

              <div class="mb-3 col-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" class="form-control" name="autor" id="autor">
              </div>
              <hr>

            </div>

            <button type="submit" class="mt-4 btn btn-success">Salvar</button>
            <a href="{{ route('books.index') }}" class="btn btn-danger">Cancelar</a>
          </form>

      </main>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="">Logo</div>
        <div class="">Detalhes</div>
      </footer>

    </div>

  </body>

</html>

 --}}

 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastrar Livro</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf


            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="gender">Gênero</label>
                <input type="text" class="form-control" id="gender" name="gender" required>
            </div>

            <div class="form-group">
                <label for="year">Ano</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

