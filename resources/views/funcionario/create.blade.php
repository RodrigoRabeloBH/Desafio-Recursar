@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4 d-flex justify-content-center">
        <h2 class="">Cadastrar Funcionário</h2>   
    </div>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-8 col-sm-12 card p-4 mb-3">
            {!! Form::open(['action'=> 'FuncionarioController@store','method' => 'POST']) !!}
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        {{Form::label('Nome','Nome')}}
                        {{Form::text('Nome','', ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('DataNascimento','DataNascimento')}}
                        {{Form::date('DataNascimento','', ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{Form::label('Salario','Salário')}}
                        {{Form::text('Salario','', ['class' => 'form-control salario'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{Form::label('Atividades','Atividades')}}
                        {{Form::textarea('Atividades','', ['class' => 'form-control','rows' => '4'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    {{Form::submit('Cadastrar',['class' => 'btn btn-sm btn-info'])}}
                    <a href="/showall" class=" btn btn-sm btn-secondary">Voltar</a>
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