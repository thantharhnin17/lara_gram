<?php

use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;

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



Auth::routes();

Route::get('/email',function(){
    return new NewUserWelcomeMail();
});

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/', [PostsController::class, 'index']);
Route::get('/post/create', [PostsController::class, 'create']);
Route::post('/post', [PostsController::class, 'store']);
Route::get('/post/{post}', [PostsController::class, 'show']);


Route::post('follow/{user}', [FollowsController::class, 'store']);
