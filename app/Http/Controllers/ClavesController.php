<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clave;
use Illuminate\Http\Response;
use Illuminate\Suppor\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ClavesController extends Controller
{
    
    public function index()
    {
        //
        $clave = Clave::all();
        return view('claves', compact('clave'));

        // $clave = Clave::all();
        // return view('claves' , ['clave' => $clave]);
    }

    
    public function create(array $data)
    {
        //
        return Clave::create([
            'clave' => $data['clave']
        ]);
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
