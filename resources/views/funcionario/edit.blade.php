@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4 d-flex justify-content-center">
    <h2 class="">Editar Funcionário: <span class="text-primary">{{$funcionario->Nome}}</span></h2>   
    </div>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-8 col-sm-12 card p-4 mb-3">
            {!! Form::open(['action'=> ['FuncionarioController@update',$funcionario->CodFuncionario],'method' => 'POST']) !!}
            {{Form::hidden('_method','PUT')}}
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        {{Form::label('Nome','Nome')}}
                        {{Form::text('Nome',$funcionario->Nome, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('DataNascimento','Data de Nascimento')}}
                        {{Form::date('DataNascimento',$funcionario->DataNascimento, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{Form::label('Salario','Salário')}}
                        {{Form::text('Salario',$funcionario->Salario, ['class' => 'form-control salario'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{Form::label('Atividades','Atividades')}}
                        {{Form::textarea('Atividades',$funcionario->Atividades, ['class' => 'form-control','rows' => '4'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    {{Form::submit('Salvar',['class' => 'btn btn-sm btn-info'])}}
                    <a href="/showall" class="btn btn-sm btn-secondary">Voltar</a>
                </div>
            </div> 
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    const input = document.querySelector('.salario');
    input.addEventListener('blur',()=>{
        var x = input.value.replace(',','.');
        input.value = x;   

        const re = /^[0-9]{1,6}(.[0-9]{2})$/;
            if (!re.test(input.value)) {
                alert("Apenas valores numéricos são permitidos");
                input.value = "";                
            }  
    });
</script>
@endsection