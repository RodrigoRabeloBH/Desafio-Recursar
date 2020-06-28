<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\FuncionarioFilho;

class FuncionarioFilhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarioFilho.create');
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
            'CodFuncionario' => 'required'
        ]);

        $filho = new FuncionarioFilho;

        $filho->Nome = $request->input('Nome');
        $filho->DataNascimento = $request->input('DataNascimento');
        $filho->CodFuncionario = $request->input('CodFuncionario');

        $filho->save();

        return redirect('/showall')->with('success', 'Filho adicionado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($CodFuncionarioFilho)
    {
        

        $filho = FuncionarioFilho::find($CodFuncionarioFilho);
        return view('funcionarioFilho.show')->with('filho', $filho);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($CodFuncionarioFilho)
    {
        $filho = FuncionarioFilho::find($CodFuncionarioFilho);
        return view('funcionarioFilho.edit')->with('filho',$filho);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $CodFuncionarioFilho)
    {
        $this->validate($request, [
            'Nome' => 'required',
            'DataNascimento' => 'required'         
        ]);

        $filho = FuncionarioFilho::find($CodFuncionarioFilho);

        $filho->Nome = $request->input('Nome');
        $filho->DataNascimento = $request->input('DataNascimento');

        $filho->save();

        return redirect('/showall')->with('success', 'Informações atualizadas!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($CodFincionarioFilho)
    {
        $filho = FuncionarioFilho::find($CodFincionarioFilho);
        $filho->delete();
        return redirect('/showall')->with('success', 'Removido!');
    }
}
