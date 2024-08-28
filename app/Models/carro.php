<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{

    protected $table = 'carro';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'descricao',
        'latitude',
        'logitude',
        'tipo',
    ];
}
