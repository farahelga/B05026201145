<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showETS()
    {
        return view('ets');
    }

    function showForm()
    {
        return view('showgreeting');
    }

    function recursiveFunc(Request $request)
    {
        return view('tugas');
    }
}
