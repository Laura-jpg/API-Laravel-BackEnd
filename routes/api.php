<?php

use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/ok', function(){
    return ['status' => true];
});

Route::get('/books', [BooksController::class, "index"]);
Route::post('/books', [BooksController::class, "sendBook"]);
Route::put('/books/{id}', [BooksController::class, "update"]);
Route::delete('/books/{id}', [BooksController::class, "delete"]);