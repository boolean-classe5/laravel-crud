<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        echo 'test';

        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $dati = $request->all();
        $nuovo_prodotto = new Product();
        // $nuovo_prodotto->name = $dati['name'];
        // $nuovo_prodotto->description = $dati['description'];
        // $nuovo_prodotto->price = $dati['price'];
        // $nuovo_prodotto->sale_price = $dati['sale_price'];
        // $nuovo_prodotto->category = $dati['category'];
        $nuovo_prodotto->fill($dati);
        $nuovo_prodotto->save();

        //return view('products.store');
        return redirect()->route('products.index');
    }


    public function show($product_id)
    {
        $product = Product::find($product_id);
        if(empty($product)) {
          abort(404);
        }
        $data = [
          'product' => $product
        ];
        return view('products.show', $data);
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
