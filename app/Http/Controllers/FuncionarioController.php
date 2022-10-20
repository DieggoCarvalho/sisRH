<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{   
    public function index(Request $request)
    {  
        // dd($request);
        $funcionarios = Funcionario::where('nome', 'like', '%'.$request->buscaFuncionario.'%')->orderBy('nome','asc')->get();
        $totalFuncionarios = Funcionario::all()->count();                          
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }
}
