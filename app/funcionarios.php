<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    public $timestamps = false;
    protected $table = 'funcionarios';
    protected $fillable = [
        'name', 'sobrenome', 'email', 'entidade', 'telefone', 'password', 'sexo', 'cpf', 'rg', 'dia', 'mes', 'ano', 'cep', 'rua', 'bairro', 'cidade', 'uf','id_entidade'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
