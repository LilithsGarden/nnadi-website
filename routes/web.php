<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Serve fonts directly from public/fonts
Route::get('/fonts/{path}', function ($path) {
    $file = public_path("fonts/{$path}");
    if (file_exists($file)) {
        return response()->file($file);
    }
    abort(404);
})->where('path', '.*\.ttf');