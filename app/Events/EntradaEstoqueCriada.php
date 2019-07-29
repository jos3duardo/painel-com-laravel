<?php

namespace App\Events;

use App\EstoqueEntradas;

class EntradaEstoqueCriada
{

    /**
     * @var EstoqueEntradas
     */
    private $entradas;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EstoqueEntradas $entradas)
    {
        $this->entradas = $entradas;
    }

    /**
     * @return EstoqueEntradas
     */
    public function getEntradas(): EstoqueEntradas
    {
        return $this->entradas;
    }




}
