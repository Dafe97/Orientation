<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrientationController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\Abouts;
use App\Http\Controllers\Job;
use App\Http\Controllers\Profil;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Services;
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

Route::get('/welcome', function () {
    return view('home');
});

Route::resource("/university",UniversityController::class)->middleware(['auth']);
Route::resource("/test-orientation",OrientationController::class)->middleware(['auth']);
Route::resource("/contact",ContactController::class);
Route::get("/service",[Services::class,"index"])->middleware(['auth'])->name('service');
Route::get("/a-propos",[Abouts::class,"index"])->middleware(['auth'])->name('propos');
Route::get("/utilisatteur",[UserController::class,"index"])->middleware(['auth'])->name('user');
Route::get("/profil/{id}",[Profil::class,"index"])->middleware(['auth'])->name('profil');
Route::put("/profil",[Profil::class,"edit"])->middleware(['auth'])->name('profil.edit');
Route::post("/profil",[Profil::class,"profil"])->middleware(['auth'])->name('profil_img');
Route::get("/métier/{id}",[Job::class,"show"])->name('jobShow');
Route::get("/métier",[Job::class,"index"])->name('job');
Route::get("/filiere/{id}",[UniversityController::class ,"sector"])->middleware(['auth'])->name('sector');
Route::get("get-session",[SessionController::class ,"removeAll"])->name('get-session');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

require __DIR__.'/auth.php';

Auth::routes(); 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
