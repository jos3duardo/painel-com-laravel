<?php

namespace App\Listeners;

use App\Events\EntradaEstoqueCriada;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncrementoEstoqueListener
{

    /**
     * Handle the event.
     *
     * @param  EntradaEstoqueCriada  $event
     * @return void
     */
    public function handle(EntradaEstoqueCriada $event)
    {
        //incremento da entrada
        $entrada = $event->getEntradas();
        dd($entrada);
        $product = $entrada->product_id;
        $product->estoque = $product->estoque + $entrada->quantidade;
        $product->save();
    }
}
