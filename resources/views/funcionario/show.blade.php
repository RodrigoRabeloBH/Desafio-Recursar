@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4">Detalhe: <span class="text-primary">{{$funcionario->Nome}}</span></h2>
    <div class="jumbotron my-4">     
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <h5>{{$funcionario->Nome}}</h5>
                <p class="text-muted">Data de Nascimento: {{date('d/m/Y', strtotime($funcionario->DataNascimento))}}</p>
                <p class="text-muted">Salário: R${{$funcionario->Salario}}</p>
                <p class="text-muted">Atividades: {{$funcionario->Atividades}}</p>      
            </div>
            <div class="col-md-5 col-sm-12">
                <h5 class="">Filhos</h5>
                <p class="text-right">
                    <a href="/funcionariofilho/create" class="btn-sm btn-info">Adicionar Filho</a>
                </p>
                <table class="table">
                    <thead class="thead-light">                       
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($filhos as $filho)
                            <tr>
                                <td>{{$filho->Nome}}</td>
                                <td>{{date('d/m/Y', strtotime($filho->DataNascimento))}}</td>
                                <td class="text-right">
                                    <a href="" class="btn-sm btn-secondary mx-1">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="" class="btn-sm btn-info my-2 mx-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>                                   
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="col-md-4">
                    {{$filhos->links()}}
                </div>
            </div>
        </div>
     
            {!! Form::open(['action'=> ['FuncionarioController@destroy',$funcionario->CodFuncionario],'method' => 'POST']) !!}
            {{Form::hidden('_method','DELETE')}}
            <a href="/showall" class="btn btn-sm btn-primary">Voltar</a>
            {{Form::submit('Remover',['class'=> 'btn btn-sm btn-danger'])}}            
            {!! Form::close() !!}    
    </div>  
</div>

<script>

    const btn = document.querySelector('.btn-info');
    btn.addEventListener('click',()=>{
        const url = window.location.href
        const id = url.substr(url.lastIndexOf('/') + 1);
        localStorage.setItem('id',id);
    });
</script>
@endsection