<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login(){
        return view('forms.login');
    }

    public function register(){
        return view('forms.register');
    }

    public function postRegister(Request $req){


        dd($req->all());
    }
}
