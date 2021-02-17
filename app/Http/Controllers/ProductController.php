<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

define ('nome', 'Caique');

class ProductController extends Controller
{
    public function index()
    {
        $opa = array(
            "01" => array(
                'nome' => 'Caique',
                'idade' => 27,
                'sexo' => 'M'
            ),
            "02" => array(
                'nome' => 'Ivana',
                'idade' => 24,
                'sexo' => 'F'
            )
        );
        
        foreach ($opa as $value => $v) {
            echo $value . " => " . $v['nome'] . "\n";
        }

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
