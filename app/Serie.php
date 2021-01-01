<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false; //evitar a inserção do time, obrigatório por padrão no laravel
    protected $fillable = ['nome'];
}
