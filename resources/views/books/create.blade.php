@extends('layouts.main')

@section('content')


<form action="{{route('books.store')}}" method="POST">
  @csrf

  <h2>Novo Livro</h2>
  <div class="row col-8 d-flex flex-column">
    <div class="col-5">
      <input type="hidden" name="id" value="{{$books->id ?? ''}}">
      <label for="titulo" class="form-label">Título:</label>
      <input type="text" class="form-control" name="titulo" id="titulo">
    </div>
    <div class="col-3">
      <label for="ano" class="form-label">Ano:</label>
      <input type="text" class="form-control" name="ano" id="ano">
    </div>
    <div class="col-5">
      <label for="autor" class="form-label">Autor:</label>
      <input type="text" class="form-control" name="autor" id="autor">
    </div>
  </div>

  <button type="submit" class="mt-4 btn btn-primary">Salvar</button>
</form>
@endsection
