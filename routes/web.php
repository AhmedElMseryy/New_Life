<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('admin.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->name('admin.')->group(function () {

    Route::middleware('admin')->group(function () {
        #--------------------------------INDEX PAGE
        Route::view('', 'admin.index')->name('index');

        #--------------------------------SETTING PAGE
        Route::view('/network', 'admin.network.index')->name('network');

        #--------------------------------RANKS PAGE
        Route::view('/ranks', 'admin.ranks.index')->name('ranks');

        #--------------------------------PACKAGES PAGE
        Route::view('/packages', 'admin.packages.index')->name('packages');
    });

    #--------------------------------LOGIN PAGE
    Route::view('login', 'admin.auth.login')->middleware('guest:admin')->name('login');
});
