<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Catalog;

class CatalogController extends Controller
{

    public function index()
    {
        return Catalog::all();
    }

    public function store(Request $request)
    {
        Catalog::create($request->all());
    }

    public function show($id)
    {
        return Catalog::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $catalog = Catalog::findOrFail($id);
        $catalog->update($request->all());
    }
    
    public function destroy($id)
    {
        $catalog = Catalog::findOrFail($id);
        $catalog->delete();
    }
}
