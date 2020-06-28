<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\FuncionarioFilho;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('funcionario.index');
    }

    public function showAll()
    {
        $funcionarios = Funcionario::paginate(5);
        return view('funcionario.showAll')->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario.create');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'Nome' => 'required'
        ]);

        $funcionarios =  Funcionario::where('Nome', 'like', '%' . $request->input('Nome') . '%')->get();
        return view('funcionario.search')->with('funcionarios', $funcionarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Nome' => 'required',
            'DataNascimento' => 'required',
            'Salario' => 'required',
            'Atividades' => 'required',
        ]);

        $funcionario = new Funcionario;

        $funcionario->Nome = $request->input('Nome');
        $funcionario->DataNascimento = $request->input('DataNascimento');
        $funcionario->Salario = $request->input('Salario');
        $funcionario->Atividades = $request->input('Atividades');

        $funcionario->save();

        return redirect('/showall')->with('success', 'Funcionário cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($CodFuncionario)
    {
        $funcionario = Funcionario::find($CodFuncionario);
        $filhos = FuncionarioFilho::where('CodFuncionario', $CodFuncionario)->paginate(2);

        $data = array(
            'funcionario' => $funcionario,
            'filhos' => $filhos
        );


        return view('funcionario.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($CodFuncionario)
    {
        $funcionario = Funcionario::find($CodFuncionario);

        return view('funcionario.edit')->with('funcionario', $funcionario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $CodFincionario)
    {
        $this->validate($request, [
            'Nome' => 'required',
            'DataNascimento' => 'required',
            'Salario' => 'required',
            'Atividades' => 'required',
        ]);

        $funcionario = Funcionario::find($CodFincionario);

        $funcionario->Nome = $request->input('Nome');
        $funcionario->DataNascimento = $request->input('DataNascimento');
        $funcionario->Salario = $request->input('Salario');
        $funcionario->Atividades = $request->input('Atividades');

        $funcionario->save();

        return redirect('/showall')->with('success', 'Informações atualizadas!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($CodFincionario)
    {
        $funcionario = Funcionario::find($CodFincionario);
        $funcionario->delete();
        return redirect('/showall')->with('success', 'Funcionário removido!');
    }
}
