<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remedios extends Model
{
    public $timestamps = false;
    protected $table ='remedios';
    protected $fillable = [
        'nome','descricao'];
}
