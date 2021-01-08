<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('list', ['products' => $products]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'bail|required|unique:products|max:255',
            'description' => 'max:200',
            'type' => 'max:10',
            'price' => 'required|numeric',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->save();
        return redirect('/');
    }

    public function find($id) {
        $product = new Product();
        $product = Product::find($id);
        return view('edit', ['product'=> $product]);
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'name' => 'bail|required|unique:products|max:255',
            'description' => 'max:200',
            'type' => 'max:10',
            'price' => 'required|numeric',
        ]);
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = (!empty($request->price))?$request->price:0;
        $product->save();
        return redirect('/');
    }
    
    public function delete($id) {
        Product::destroy($id);
        return redirect('/');
    }
}
