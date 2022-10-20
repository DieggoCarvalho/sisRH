<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{   
    public function index()
    {  
        $funcionarios = Funcionario::all();
        $totalFuncionarios = Funcionario::all()->count();                          
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }
}
