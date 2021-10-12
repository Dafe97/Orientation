<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrientationController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


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
Route::resource("/",HomeController::class);

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::resource("university",UniversityController::class)->middleware(['auth']);
Route::resource("/test-orientation",OrientationController::class)->middleware(['auth']);
Route::resource("/contact",ContactController::class);
Route::resource("/forum",ForumController::class)->middleware(['auth']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

require __DIR__.'/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
