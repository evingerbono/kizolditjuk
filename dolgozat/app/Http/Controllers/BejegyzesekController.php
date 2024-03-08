<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use Illuminate\Http\Request;

class BejegyzesekController extends Controller
{
    //
    public function index()
    {
        return Bejegyzesek::all();
    }

    public function show($id)
    {
        return Bejegyzesek::find($id);
    }

    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzesek();
        $bejegyzes->fill($request->all());
        $bejegyzes->save();
        return $bejegyzes;
    }

}
