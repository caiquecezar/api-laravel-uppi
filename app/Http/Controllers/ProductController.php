<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $nome = "Caique";
        echo "Olá, {$nome}! Seu nome é " . $nome . "!\n";
        return Product::all();
    }

    public function store(Request $request)
    {
        Product::create($request->all());
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
