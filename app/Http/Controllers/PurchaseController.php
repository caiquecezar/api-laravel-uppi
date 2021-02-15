<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        return Purchase::all();
    }

    public function store(Request $request)
    {
        Purchase::create($request->all());
    }

    public function show($id)
    {
        return Purchase::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());
    }
    
    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();
    }
}
