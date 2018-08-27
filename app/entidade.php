<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entidade extends Model
{
    public $timestamps = false;
    protected $table = 'entidade';
    protected $fillable = [
        'nome',
    ];
}