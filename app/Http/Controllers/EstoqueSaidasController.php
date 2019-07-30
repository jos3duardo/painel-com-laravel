<?php

namespace App\Http\Controllers;

use App\EstoqueSaidas;
use App\Products;
use Illuminate\Http\Request;

class EstoqueSaidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = EstoqueSaidas::all();

        return view('estoqueSaida.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::all();
        return view('estoqueSaida.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estoque = new EstoqueSaidas();
        $estoque->quantidade = $request->quantity;
        $estoque->product_id = $request->product_id;
        if($estoque->save()){
            $product = Products::find($estoque->product_id);
            $product->estoque = $product->estoque - $estoque->quantidade;
            $product->save();
            return redirect()->route('estoque-saida')->with('success','Saida de estoque registrada!');
        }
        return redirect()->route('estoque-saida')->with('error','Saida de estoque não pode ser registrada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
