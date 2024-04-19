<?php


use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () { // Home link
  return view('welcome');
})->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');               

Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');     // POST method                                                                     

Route::get('/registration', [LoginController::class, 'registration'])->name('registration');

Route::post('/registration', [LoginController::class, 'registrationPost'])->name('registration.post');

Route::get( '/logout', [LoginController::class,'logout'])->name('logout');











Route::fallback(function () {
    return "The page does not exist!";
});


