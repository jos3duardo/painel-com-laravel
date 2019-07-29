<?php

namespace App;

use App\Events\EntradaEstoqueCriada;
use Illuminate\Database\Eloquent\Model;

class EstoqueEntradas extends Model
{
    use EstoqueMovimento;

    protected $events = [
        'created' => EntradaEstoqueCriada::class
    ];
}
