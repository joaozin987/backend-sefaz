<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContaController extends Controller
{
    public function index()
    {
       
        return view ('contas.index');
    }

    public function create()
    {
        return view('contas.create');
    }

    public function store(Request $request)
    {
        Conta::create($request->all());
        return redirect()->route('conta.show')->with('sucess', 'Cadastro realizado com sucesso');
    }
    
    public function show()
    {
       
        return view('contas.show');
    }

    public function edit()
    {   
        $contas = Conta::whereNotNull('setor')->get();
        return view('contas.edit', compact('contas'));
    }

    public function update(Request $request, $id)
    {
        
        $conta = Conta::find($id);
        $conta->update($request->all());
        return redirect()->route('contas.index');
    }

    public function destroy($id)
    {
        
        $conta = Conta::find($id);
        $conta->delete();
        return redirect()->route('conta.index');
    }

}
?>