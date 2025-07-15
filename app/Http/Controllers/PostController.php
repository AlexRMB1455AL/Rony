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
//        $round = Rony::all();
        $round = Rony::where('contact_id', 56)->get();
//         $rony = Rony::where('contact_id', 56)->first();
        foreach ($round as $rony) {
            dump($rony->content);
        }
//        dd('End of the dump');
        return $rony->author;

    }

    #[NoReturn] public function create(){

         $ronyArray = [
             [
             'title' => 'New Post',
             'content' => 'This is the content of the new post.',
             'author' => 'John Doe',
             'contact_id' => 56,
            ],
             [
            'title' => 'Another Post',
            'content' => 'This is the Content of Another post.',
            'author' => 'Anothe Jane Doe Komande',
            'contact_id' => 60,
             ],
         ];
    ;

        Rony::create(
            [
            'title' => 'New Post',
            'content' => 'This is the content of the new post.',
            'author' => 'John Doe',
            'contact_id' => 65
        ]);

        foreach ($ronyArray as $item)
        {
//            dd($rony);
            Rony::create($item);
        }
        dd($item);
    }
    public function update()
    {
         $rony = Rony::find(2);
//         dd($rony->title);
        $rony->update([
            'title' => 'Updated Post',
            'content' => 'This is the updated content of the post.',
            'author' => 'Jane Doe Update',
            'contact_id' => 56976,
        ]);
        dd('update done');

    }
    public function delete()
    {
        $ronys = Rony::withTrashed()->find(5)->restore();
////        dd($ronys->content);
//        $ronys->delete();
        dd('Delete done');
    }
    public function firstOrCreate(){

//         $ronyr = Rony::find(3);
//         dd($ronyr);
//        $anotherRony =
//
//             [
//            'title' => 'First or Create Rony',
//            'content' => 'This is the content of the first or create rost.',
//            'author' => 'First or Create Author',
//            'contact_id' => 788,
//        ];
        $rony = Rony::firstOrCreate(
            [
                'title' => 'mango4',

            ],
            [
                'author' => 'author',
                'contact_id' => '952435',
                'created_at' => now(),
                'content' => 'format content',
            ]);
        dd('done ');
    }
    public function updateOrCreate(){
        $rony = Rony::updateOrCreate(
            [
                'title' => 'mango3',
            ],
            [
                'author' => 'update author',
                'contact_id' => '952435465678',
                'created_at' => now(),
                'content' => 'update format content',
            ]);
        dd('done updateOrCreate');
    }

}
