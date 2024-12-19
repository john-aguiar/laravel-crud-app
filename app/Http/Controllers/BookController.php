<?php

namespace App\Http\Controllers;
use App\Models\Book; // Importe o modelo Book
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Exibe todos os livros
    public function index()
    {
        $books = Book::all(); // Recupera todos os livros
        return view('books.index', compact('books'));
    }

    // Mostrar o formulário de criação de livro
    public function create()
    {
        return view('books.create');
    }

    // Armazenar um novo livro no banco de dados
    public function store(Request $request)
    {
        try {
        $request->validate([
            'title' => 'required',
            'gender' => 'required',
            'author' => 'required',
            'year' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Livro cadastrado com sucesso!');
        }catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors()); // Exibe os erros de validação
        }
    }

    // Mostrar o formulário de edição do livro
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Atualizar um livro no banco de dados
    public function update(Request $request, $id)
    {
        // Validação
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'year' => 'required|integer',
            'author' => 'required|string|max:255',
        ]);

        // Atualização no banco
        $book = Book::findOrFail($id);
        $book->update($validated);

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Excluir um livro
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Livro excluído com sucesso!');
    }
}
