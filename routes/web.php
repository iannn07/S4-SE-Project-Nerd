<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('/landing');
});

Route::group(['prefix' => 'landing'], function () {
    Route::get('/', [WebController::class, 'landing'])->name('landing');
});

Auth::routes();

Route::group(['prefix' => 'user'], function () {
    Route::redirect('/', '/user/login');
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', function () {
            return view('auth.login');
        });
    });
});

Route::group(['prefix' => '/user', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [WebController::class, 'dashboard'])->name('admin.dashboard');
});
