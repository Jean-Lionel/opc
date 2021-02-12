<?php

use App\Http\Controllers\MemberList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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
    return view('auth.login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum'])->group(function(){
	Route::resource('people', PersonController::class);
	Route::get('paiment', [PersonController::class , 'paiment'])->name('paiment');

});

Route::get('member-list', [MemberList::class, 'index'])->name('person-list');

Route::get('register-member',[MemberList::class, 'create'])->name('register-member');
Route::post('register-member',[MemberList::class, 'store'])->name('register-member');