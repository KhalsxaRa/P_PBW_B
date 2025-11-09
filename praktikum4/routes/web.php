<?php

use Illuminate\Support\Facades\Route;

Route::get('/tentang-kami', function () {
    return view('about');
});
