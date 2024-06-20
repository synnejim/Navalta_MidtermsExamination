<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($theme)
    {
        $products = [];

        switch ($theme) {
            case 'gadgets':
                $products = [
                    ['name' => 'Smartphone', 'price' => 999],
                    ['name' => 'Laptop', 'price' => 1499],
        
                ];
                break;
            case 'books':
                $products = [
                    ['name' => 'Harry Potter', 'price' => 19.99],
                    ['name' => 'Lord of the Rings', 'price' => 24.99],
                
                ];
                break;
            case 'movies':
                $products = [
                    ['name' => 'Inception', 'price' => 14.99],
                    ['name' => 'The Dark Knight', 'price' => 12.99],
                  
                ];
                break;
            case 'anime':
                $products = [
                    ['name' => 'Naruto', 'price' => 9.99],
                    ['name' => 'Attack on Titan', 'price' => 11.99],
                    
                ];
                break;
            case 'restaurants':
                $products = [
                    ['name' => 'Restaurant A', 'price' => 49.99],
                    ['name' => 'Restaurant B', 'price' => 79.99],
                    
                ];
                break;
            default:
                abort(404); 
        }

        return view('products.index', compact('products', 'theme'));
    }
}
