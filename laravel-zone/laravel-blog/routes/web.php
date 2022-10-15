<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', [
        'welcomeMessage' => "This is the new world of PHP"
    ]);
});

Route::get('/hello', function() {
    return 'hello world';
});

// Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');


// RESTful routes
Route::get('/blogs', [ArticlesController::class, 'index']);
Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/articles', [ArticlesController::class, 'store']);

Route::get('/articles/{id}', [ArticlesController::class, 'show']);
Route::put('/articles/{id}', [ArticlesController::class, 'update']);
Route::delete('/articles/{id}', [ArticlesController::class, 'destroy']);