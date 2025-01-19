<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function pengertianmusik()
    {
        return view('pengertianmusik');
    }

    public function simbolmusik()
    {
        return view('simbolmusik');
    }

    public function jenismusik()
    {
        return view('jenismusik');
    }

    public function fungsialatmusik()
    {
        return view('fungsialatmusik');
    }
}


