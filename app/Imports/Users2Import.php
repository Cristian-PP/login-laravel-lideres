<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;

class Users2Import implements ToModel, ToCollection ,WithHeadingRow
{
   
    public function collection(Collection $rows){

       // Validate
       Validator::make($rows->toArray(), [
          '*.username' => 'required|string',
          '*.name' => 'required|string',
          '*.email' => 'required|email',
          '*.clave' => 'required|string',
          '*.password' => 'required|string',

       ],[
          '*.username.required'=> "The username field is required.",
          '*.username.string'=> "The username must be string.",
          '*.name.required'=> "The name field is required.",
          '*.name.string'=> "The name must be string.",
          '*.email.required'=> "The email field is required.",
          '*.email.email'=> "The email must be a valid email address.",
          '*.clave.required'=> "The clave field is required.",
          '*.clave.string'=> "The clave must be string.",
          '*.password.string'=> "The password field is required.",
          '*.password.string'=> "The password must be string.",

       ])->validate();

       foreach ($rows as $row) {

          // Check email already exists
          $count = Employees::where('email',$row['email'])->count();
          if($count > 0){
             continue;
          }
          Employees::create([
             'username' => $row['username'],
             'name' => $row['name'], 
             'email' => $row['email'],
             'clave' => $row['clave'],
             'password' => $row['password'],

         ]);
       }
    }

    // Specify header row index position to skip
    public function headingRow(): int {
       return 1;
    }
}
