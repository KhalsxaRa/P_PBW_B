<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
// return redirect('/admin');
Route::get('/kegiatan', function () {
return view('kegiatan-public', [
'items' => \App\Models\Kegiatan::latest()->paginate(9),
]);
});
