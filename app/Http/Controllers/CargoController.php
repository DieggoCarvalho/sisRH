<?php

namespace App\Http\Controllers;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        $cargos = Cargo::all();
        return view('cargos.index', compact('cargos'));
    }
    
    public function create(){
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Cargo::create($input);

        return redirect()->route('cargos.index')->with('Sucesso', 'Cargo Cadastrado com Sucesso!');
    }
}
