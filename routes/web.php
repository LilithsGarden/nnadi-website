<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinNetworkController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/advisory', function () {
    return view('advisory');
});

Route::get('/talent-management', function () {
    return view('talent');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/join-network', [JoinNetworkController::class, 'store'])->name('join.network');

// Serve fonts directly from public/fonts
Route::get('/fonts/{path}', function ($path) {
    $file = public_path("fonts/{$path}");
    if (file_exists($file)) {
        return response()->file($file);
    }
    abort(404);
})->where('path', '.*\.ttf');