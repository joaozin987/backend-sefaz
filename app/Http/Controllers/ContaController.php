<?php


namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index()
    {
        // Lógica para listar todas as contas
        $contas = Conta::all();
        return view('contas.index', compact('contas'));
    }

    public function create()
    {
        return view('contas.create');
    }

    public function store(Request $request)
    {
        // Lógica para criar uma nova conta
        Conta::create($request->all());
        return redirect()->route('conta.show')->with('sucess', 'Cadastro realizado com sucesso');
    }

    public function show()
    {
        // Lógica para mostrar informações de uma conta
        return view('contas.show');
    }

    public function edit($id)
    {
        // Lógica para editar a conta
        $conta = Conta::find($id);
        return view('contas.edit', compact('conta'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar a conta
        $conta = Conta::find($id);
        $conta->update($request->all());
        return redirect()->route('conta.index');
    }

    public function destroy($id)
    {
        // Lógica para excluir a conta
        $conta = Conta::find($id);
        $conta->delete();
        return redirect()->route('conta.index');
    }
}
?>