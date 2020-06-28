@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <h2>Lista de Funcionários</h2>
    </div>
    <div class="row my-3">
        <div class="col-md-9">
           {!! Form::open(['action'=> 'FuncionarioController@search','method' => 'GET']) !!}
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        {{Form::text('Nome','', ['class' => 'form-control','placeholder' => 'Pesquisar por nome', 'id' => 'search'])}}                      
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    {{Form::submit('Pesquisar',['class' => 'btn btn-sm  btn-info'])}}
                    <a href="/funcionario/create" class="btn btn-sm btn-success">Cadastrar</a>
                </div>            
            </div>  
            {!! Form::close() !!}
        </div>  
    </div>
    <div class="row">     
        <div class="col-md-9">     
            <table class="table table-hover">
                <thead class="thead-light">               
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Salário</th>               
                    <th></th>
                </thead>
                <tbody id="tbody">                    
                        @foreach ($funcionarios as $funcionario)
                        <tr>                       
                            <td>{{$funcionario->Nome}}</td>              
                            <td>{{date('d/m/Y', strtotime($funcionario->DataNascimento))}}</td>              
                            <td>R${{$funcionario->Salario}}</td>      
                            <td class="text-right">
                                <a href="/funcionario/{{$funcionario->CodFuncionario}}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="/funcionario/{{$funcionario->CodFuncionario}}/edit" class="btn btn-sm btn-info">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>                                   
                            </td>              
                        </tr>
                        @endforeach                    
                </tbody>
            </table>            
        </div>   
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 mx-auto">
            {{$funcionarios->links()}} 
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
      $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script> 
@endsection