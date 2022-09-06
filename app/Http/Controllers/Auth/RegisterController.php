<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Clave;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Auth\User as Authenticatable;   

// use Illuminate\Contracts\Auth\Authenticatable;

class RegisterController extends Controller

{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'clave' => ['required', 'string', 'unique:users', 'exists:claves,clave'],
            'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()->mixedCase()->numbers()],
        ]);

        // if ($this->validator($data)->fails()){
        //     return Redirect::back()->withErrors($this->validator($data))
        //                 ->withInput();
        // }

    }


    protected function create(array $data)
    {

        $clave = Clave::all();
        
            $clave = Clave::where('clave', $data['clave'])->get();
            if((count($clave) > 0)){

                return User::create([
                    'name' => $data['name'],
                    'lastname' => $data['lastname'],
                    'email' => $data['email'],
                    'clave' => $data['clave'],
                    'password' => Hash::make($data['password'])
                ])->assignRole('Member');

            }else{

            //     return redirect()->back()->with('info', 'El Número de Socio ya esta asignado, intenta usando otro Número de Socio');

                // return redirect()->route('login')->with('message', 'The account has been suspended');


                // return redirect::back()->with('message', 'Este Número de Socio ya esta asignado, intenta con otro número');
   
            }

    }
}