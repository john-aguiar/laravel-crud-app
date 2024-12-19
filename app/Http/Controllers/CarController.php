<?php

namespace App\Http\Controllers;
use App\Models\Car; // Importe o modelo Car
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Exibe todos os carros
    public function index()
    {
        $cars = Car::all(); // Recupera todos os carros
        return view('cars.index', compact('cars'));
    }

    // Mostrar o formulário de criação de carro
    public function create()
    {
        return view('cars.create');
    }

    // Armazenar um novo carro no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
        ]);
        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Carro cadastrado com sucesso!');
    }

    // Mostrar o formulário de edição do carro
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    // Atualizar um carro no banco de dados
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'price' => 'required|numeric|min:0',
        ]);

        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Carro atualizado com sucesso!');
    }

    // Excluir um carro
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Carro excluído com sucesso!');
    }
}
