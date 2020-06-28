<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{ 

    protected $table = 'FUNCIONARIO';

    protected $cascadeDeletes = ['Funcionario', 'FuncionarioFilho'];

    public $primaryKey = 'CodFuncionario';

    public function child()
    {
        return $this->hasMany('App\FuncionarioFilho');
    }
}
