<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('profiles', 'ProfileController');
Route::get('/playground', \App\Http\Livewire\Playground::class);
Route::get('/', \App\Http\Livewire\Profiles::class);
Route::view('profiles','admin.profiles');
//Route::get('/livewire.profiles', function () {
 //   return view('livewire.profiles');
//});
//Route::livewire('/', 'profiles');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
