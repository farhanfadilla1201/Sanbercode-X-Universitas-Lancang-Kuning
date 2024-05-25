<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('Page.Register');
    }

    public function home(request $requet)
    {
        $fname = $requet->input('fullname');

        return view('page.welcome',['fname'=>$fname]);
    }
}
