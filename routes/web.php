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
    return view('welcome');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/createTitle', function () {
    return view('createTitle');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/editnovel/{id}', App\Livewire\Edithapusnovel::class)->name('editnovel');
Route::get('/editnovel/{id}', function () {
    return view('editnovel');
})->name('editnovel');
