<?php

use App\Http\Controllers\MemberList;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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


//SITE ROUTER

Route::get('site', [SiteController::class, 'index']);
Route::get('create-member', [SiteController::class, 'createMember']) ;

Route::get('/',[SiteController::class, 'index'])->name('accueil');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum'])->group(function(){

	Route::resource('people', PersonController::class);
	
	Route::get('paiment', [PersonController::class , 'paiment'])->name('paiment');
	Route::get('rapport', [RapportController::class, 'index'] )->name('rapport');

	Route::resource('users',UserController::class);
	Route::get('user-profil', [UserController::class, 'userProfil'])->name('user-profil');

});



Route::get('member-list', [MemberList::class, 'index'])->name('person-list');

Route::get('register-member',[MemberList::class, 'create'])->name('register-member');
Route::post('register-member',[MemberList::class, 'store'])->name('register-member');