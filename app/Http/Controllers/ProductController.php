<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title'=>'THE INVISIBLE MAN',
            'DirectedBy' => 'Leigh Whannell' ], 

            ['title'=> 'NEVER RARELY SOMETIMES ALWAYS',
            'DirectedBy' => 'Eliza Hittman' ],

            ['title' => 'HAMILTONS',
            'DirectedBy' => 'Thomas Kail']
        ];

        return view('welcome', compact('movies'));
    }
}
