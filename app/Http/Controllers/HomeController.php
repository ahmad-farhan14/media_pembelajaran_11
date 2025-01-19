<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pengertianmusik()
    {
        return view('pengertianmusik');  // Mengembalikan view 'pengertianmusik'
    }

    public function simbolmusik()
    {
        return view('simbolmusik');  // Mengembalikan view 'simbolmusik'
    }

    public function jenismusik()
    {
        return view('jenismusik');  // Mengembalikan view 'jenismusik'
    }

    public function fungsialatmusik()
    {
        return view('fungsialatmusik');  // Mengembalikan view 'fungsialatmusik'
    }
}
