<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idosos extends Model
{
    public $timestamps = false;
    protected $table ='idosos';
    protected $fillable = [
        'nome','dia','mes','ano','sexo','rg','cpf','doencap','descricaop', 'doencaf', 'descricaof','alimentacao','descricaoal','remedio','dosagem','horario','telefone1','telefone2','responsavel1','responsavel2','cep','cidade','rua','bairro','uf','foto','id_entidade'] ;
}
