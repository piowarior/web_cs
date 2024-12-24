<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return 'Selamat datang di Dashboard!';
})->middleware('auth');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // Menampilkan form login
Route::post('/login', [AuthController::class, 'login']); // Memproses login