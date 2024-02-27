<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventTask;
use App\Http\Controllers\BlogController;

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
    return view('student.welcome');
});


Route::get('/create-task', function () {
    return view(('task.create-task'));
});

Route::get('/show-task', function () {
    return view(('task.show-task'));
});

// Route::get('/', [EventTask::class, 'index']);
// Route::get('/create-task', [EventTask::class, 'createtask']);
// Route::get('/show-task', [EventTask::class, 'showtask']);

// Rotas blogs

// Route::get('/create/blog', [BlogController::class, 'create']);
// Route::post('/store-blog', [BlogController::class, 'store']);



Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
