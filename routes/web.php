<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('/login', function () {
    return redirect()->route('profile');
});

Route::get('/logintest', [TestController::class, 'index']);

Route::get('/user/profile', function () {
    dd('/user/profile');
})->name('profile');

use App\Models\User;

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});
