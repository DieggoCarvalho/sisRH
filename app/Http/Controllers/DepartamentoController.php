<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Departamento::create($input);

        return redirect()->route('departamentos.index')->with('Sucesso', 'Departamento Cadastrado com Sucesso!');
    }
}