<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
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
