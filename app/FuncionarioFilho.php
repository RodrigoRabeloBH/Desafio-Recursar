<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionarioFilho extends Model
{
    protected $table = 'FUNCIONARIOFILHO';

    public $primaryKey = 'CodFuncionarioFilho';
    
    public function relation(){
        return $this->belongsTo('App\Funcionario');
    }
}
