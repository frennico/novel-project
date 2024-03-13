<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/Tampilan/{idnovel}', function () {
    return view('Tampilan');
});
Route::get('/createTitle', function () {
    return view('createTitle');
});
Route::get('/chapternovel', function () {
    return view('chapternovel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hapus/{id}', [App\Http\Controllers\HomeController::class, 'hapus']);

// Route::get('/editnovel/{id}', App\Livewire\Edithapusnovel::class)->name('editnovel');
Route::get('/editnovel/{id}', function () {
    return view('editnovel');
})->name('editnovel');


