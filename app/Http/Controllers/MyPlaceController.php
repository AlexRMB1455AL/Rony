<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MyPlaceController extends Controller
{



    public function index():string
    {
       $tarif = 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy';
        var_dump($tarif);
        return view('example');
    }
}
