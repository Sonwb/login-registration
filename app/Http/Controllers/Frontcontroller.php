<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function  index(){
        return view ('front.index');
    }

    public function  login(){
        return view ('auth.login');
    }

    public function  register(){
        return view ('auth.register');
    }
}
