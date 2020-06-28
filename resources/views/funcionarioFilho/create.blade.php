@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4 d-flex justify-content-center">
        <h2 class="">Cadastro de Filhos</h2>   
    </div>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-5 col-sm-12 card p-4 mb-3">
            {!! Form::open(['action'=> 'FuncionarioFilhoController@store','method' => 'POST']) !!}              
                <div class="form-group"> 
                    {{Form::hidden('CodFuncionario','', ['class' => 'form-control id'])}}
                </div>
                <div class="form-group">
                    {{Form::label('Nome','Nome')}}
                    {{Form::text('Nome','', ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('DataNascimento','DataNascimento')}}
                    {{Form::date('DataNascimento','', ['class' => 'form-control'])}}
                </div>           
        <div class="row">
            <div class="col text-center">
                {{Form::submit('Cadastrar',['class' => 'btn btn-sm btn-info'])}}
                <a class=" btn btn-sm btn-secondary text-white">Voltar</a>
            </div>
        </div>      
        {!! Form::close() !!}
        </div>
    </div>
</div>

<script> 
document.querySelector('.id').value = localStorage.getItem('id');
document.querySelector('.btn-secondary').addEventListener('click', ()=>{
   window.history.back();
});
</script>
@endsection