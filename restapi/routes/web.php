<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/people', [PeopleController::class, 'index'])->name('people.index');
Route::get('/people/create', [PeopleController::class, 'create'])->name('people.create');
Route::post('/people', [PeopleController::class, 'store'])->name('people.store');
Route::get('/people/{people}/edit', [PeopleController::class, 'edit'])->name('people.edit');
Route::put('/people/{people}/update', [PeopleController::class, 'update'])->name('people.update');
Route::delete('/people/{people}/destroy', [PeopleController::class, 'destroy'])->name('people.destroy');