<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Suppor\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use Maatwebsite\Excel\Facade\Excel;

class AffiliatesController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:affiliates');
        $this->middleware('auth');
    }

    //
    public function members()
    {
        $user = User::all();
        
        return view('affiliates', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('edit', compact('user'));
        // return view('edit', ['user' => $user]);

        // return view('edit');
    }

    public function update(Request $request, User $user)
    {
        // $user = User::find($id);
        // dd($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->clave = $request->clave;
        $user->save();
        // return redirect()->action([AffiliatesController::class, 'edit']);
        return redirect()->route('affiliates.members', $user);
        

        // return redirect()->action([AffiliatesController::class, 'edit']);
    }

    public function upload(Request $request)
    {
                // $request->validate([
                //     'fileCsv'    => 'required'
                // ]);
    
    
                // $file = $request->file('fileCsv')->store('public');
                // $url    = Storage::url($file);
                // $file      = fopen(public_path($url), 'r');
    
    
                // return redirect()->route('upload')->with('alert', 'Se han subido correctamente');
    
        
        return view('upload');

        // $file = $request->file('file');
        // Excel::import(new UserImport, $file);
        // return back()->with('message', 'Importacion completa');
    }
}
