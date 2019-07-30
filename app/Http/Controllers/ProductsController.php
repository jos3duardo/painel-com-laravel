<?php

namespace App\Http\Controllers;

use App\Category;
use App\EstoqueEntradas;
use App\EstoqueSaidas;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $categories = Category::all();
        return view('products.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->unidade = $request->unidade;
        $product->category_id = $request->categoria;
        $product->estoque = $request->estoque;
        $product->valor = $request->valor;
        $product->save();
        return redirect(route('products'))->with('status','Produto criado!');
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
        $product = Products::find($id);
        $categories = Category::all();

        return view('products.edit', compact('product','categories'));
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
        $valorNew = str_replace(',', '',$request->valor);
        $product = Products::find($id);
        $product->name = $request->name;
        $product->unidade = $request->unidade;
        $product->category_id = $request->categoria;
//        $product->estoque = $request->estoque;
        $product->valor = $valorNew;
        $product->save();
        return redirect(route('products'))->with('status','Produto editado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $estoqueEntrada = EstoqueEntradas::where([
           'product_id' => $product->id
        ])->first();

        $estoqueSaida = EstoqueSaidas::where([
            'product_id' => $product->id
        ])->first();

        if(isset($estoqueEntrada) || isset($estoqueSaida)){
            return redirect(route('products'))->with('warning', 'Existe movimentação de estoque para este produto, ele não pode ser excluido!');
        }

        $product->delete();

        return redirect(route('products'))->with('error','Produto apagado!');
    }
}
