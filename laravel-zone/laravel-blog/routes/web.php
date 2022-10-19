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

# Admin Panel
Route::get('/manage/articles', [ArticlesController::class, 'manage'])->name('manage.articles.index');
Route::get('/articles/create', [ArticlesController::class, 'create'])->name('manage.articles.create'); // view create page
Route::post('/articles', [ArticlesController::class, 'store'])->name('manage.articles.store'); // store data
Route::get('/manage/articles/{id}/edit', [ArticlesController::class, 'edit'])->name('manage.articles.edit');
Route::put('/articles/{id}', [ArticlesController::class, 'update'])->name('manage.articles.update');
Route::delete('/articles/{id}', [ArticlesController::class, 'destroy'])->name('manage.articles.destroy');

# Frontend
Route::get('/blogs', [ArticlesController::class, 'index']);
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');

Route::get('/articles/{id}', [ArticlesController::class, 'show'])->name('articles.show');
