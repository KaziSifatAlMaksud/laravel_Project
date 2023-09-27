<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){

        $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required | email',
                    'username' => 'required',
                    'password' => 'required',
                ]
        );
        
        print_r($request->all());

    }
}
