<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rony;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{
     public function index(): string
     {
//         $rony = Rony::find(4);
        $ronys = Rony::all();
        dd($ronys);
//        return $rony->author;
    }
}
