@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4">Resultados</span></h2>

    <div class="row">     
        <div class="col-md-9">     
            <table class="table table-hover">
                <thead class="thead-light">               
                    <th>Nome</th>
                    <th>Data de Nascimento</th>                        
                    <th></th>
                </thead>
                <tbody id="tbody">                    
                        @foreach ($funcionarios as $funcionario)
                        <tr>                       
                            <td>{{$funcionario->Nome}}</td>              
                            <td>{{date('d/m/Y', strtotime($funcionario->DataNascimento))}}</td>        
                             <td class="text-right">
                                <a href="/funcionario/{{$funcionario->CodFuncionario}}" class="btn-sm btn-secondary mx-1">
                                    <i class="fas fa-info-circle my-2"></i>
                                </a>
                                <a href="/funcionario/{{$funcionario->CodFuncionario}}/edit" class="btn-sm btn-info mx-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>                                   
                            </td>              
                        </tr>
                        @endforeach                    
                </tbody>
            </table>            
        </div>   
    </div>
</div>
@endsection