<?php

namespace App\Listeners;

use App\Events\EntradaEstoqueCriada;
use App\Products;
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
        $product = Products::find($entrada->product_id);
        $product->estoque = $product->estoque + $entrada->quantidade;
        $product->save();
    }
}
