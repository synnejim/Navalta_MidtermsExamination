<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = array (
            'title1' => 'THE INVISIBLE MAN',
            'Directed By' => 'Leigh Whannell',
            'title2' => 'NEVER RARELY SOMETIMES ALWAYS',
            'Directed By' => 'Eliza Hittman',
            'title2' => 'HAMILTONS',
            'Directed By' => 'Thomas Kail'
        );

        return view('welcome', $movies);
    }
}
