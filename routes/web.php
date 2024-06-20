<?php

use App\Http\Controllers\ProductController;

Route::get('/products/{theme}', [ProductController::class, 'index']); 
