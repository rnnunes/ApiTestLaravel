<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{

    public function index()
    {
        return carro::all();
    }

   
    public function store(Request $request)
    {
        carro::create($request->all());
    }


    public function show($id)
    {
        return carro::findOrFail($id);
    }
    
    public function update(Request $request, $id)
    {
        $carro = carro::findOrFail($id);
        $carro ->update($request->all());

    }

    public function destroy($id)
    {
        $carro = carro::findOrFail($id);
        $carro ->delete();
    }
}
