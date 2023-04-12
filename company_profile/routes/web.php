<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AboutController;
use App\Models\Service;
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


//Home
Route::get('/',[HomeController::class, 'index']); // untuk memanggil class index harus menggunakan array tanda [] didalam home sampai index
Route::get('/about',[HomeController::class, 'about']); // (/about artinya untuk memanggil abaout didalam home controller di index)
Route::get('/contact',[HomeController::class, 'contact']); 
Route::get('/portofolio',[HomeController::class, 'portofolio']); 
Route::get('/service',[HomeController::class, 'service']);
Route::get('/team',[HomeController::class, 'team']);
Route::get('/testimoni',[HomeController::class, 'testimoni']); 

//auth                                              // name ini adalah alias
Route::get('/login',[AuthController::class, 'login'])->name('login'); // didalam folder auth ada view blade login, maka dikasih /login dengan controler auth
Route::post('/login',[AuthController::class, 'authenticated']);
Route::get('/logout',[AuthController::class, 'logout']);

Route::prefix('/admin')->middleware('auth')->group(function(){
    // fungsi grouping untuk link yg di frontend dan table tidak sama
//dashboard
Route::get('/dashboard',[DashboardController::class, 'index']); // midleware untuk memastikan dia sudah login atau blm untuk mengakeses dasdhboard

Route::resource('sliders', SliderController::class);
Route::resource('services', ServiceController::class);
Route::resource('testimonials', TestimonialController::class);
Route::resource('portofolios', PortofolioController::class);
Route::resource('clients', ClientController::class);
Route::resource('teams', TeamController::class);

// table contact
Route::get('contact', [ContactController::class, 'index']);
Route::put('contact/{id}', [ContactController::class, 'update']);

// table about
Route::get('about', [AboutController::class, 'index']);
Route::put('about/{id}', [AboutController::class, 'update']);

});


     