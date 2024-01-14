<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('Bodera/310463/people/create', [PeopleController::class, 'create']);
Route::put('Bodera/310463/people/update/(id)', [PeopleController::class, 'update']);
Route::delete('Bodera/310463/people/delete/(id)', [PeopleController::class, 'delete']);
Route::get('Bodera/310463/people/read/(id)', [PeopleController::class, 'read']);
Route::get('Bodera/310463/people/read', [PeopleController::class, 'readall']);