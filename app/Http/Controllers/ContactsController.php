<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ContactsController extends Controller
{
    #[NoReturn] public function contact(): string

    {
        $hors = 'white horse';
        dd($hors);
    }
}
