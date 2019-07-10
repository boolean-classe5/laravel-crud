<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();

        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|bail',
            'description' => 'required',
            'price' => 'required|numeric|between:0,9999.99',
            'sale_price' => 'nullable|numeric|between:0,9999.99',
            'category' => 'required|max:255',
        ]);


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


    public function edit($product_id)
    {
      $product = Product::find($product_id);
      if(empty($product)) {
        abort(404);
      }
      $data = [
        'product' => $product
      ];
      return view('products.edit', $data);
    }


    public function update(Request $request, $product_id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|bail',
            'description' => 'required',
            'price' => 'required|numeric|between:0,9999.99',
            'sale_price' => 'nullable|numeric|between:0,9999.99',
            'category' => 'required|max:255',
        ]);

        $dati = $request->all();
        $prodotto = Product::find($product_id);
        $prodotto->update($dati);

        return redirect()->route('products.index');
    }


    public function destroy($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
