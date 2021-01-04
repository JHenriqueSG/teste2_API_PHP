<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use app\Models\models\formas;
use Illuminate\Http\Request;

class FormasController extends Controller
{

    public function index()
    {
        return formas::all();
    }


    public function store(Request $request)
    {
        formas::create($request->all());
    }

    public function show($id)
    {
        return formas::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $forma = formas::findOrFail($id);
        $forma->update($request->all());
    }

    public function destroy($id)
    {
        $forma = formas::findOrFail($id);
        $forma->delete();
    }

    public function calcArea($area)
    {
        $area = formas::all();
        $areaTotal = $area->sum('area');
    }
}
