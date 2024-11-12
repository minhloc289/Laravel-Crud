<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerAuthController;
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


Route::get('/users', [UserController::class, 'loadAll']);

Route::get('/add/user', [UserController::class, 'loadUserForm']);

Route::post('/add/user', [UserController::class, 'addUser'])->name('AddUser');

Route::get('/edit/{id}', [UserController::class, 'loadEditForm']);

Route::get('/delete/{id}', [UserController::class, 'deleteUser']);

Route::post('/edit/user', [UserController::class, 'editUser'])->name('EditUser');

//Front-end 

Route::get('/customer/login', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerAuthController::class, 'login']);
Route::get('/customer/sign_up', [CustomerAuthController::class, 'showSignUpForm'])->name('customer.sign_up');
Route::post('/customer/sign_up', [CustomerAuthController::class, 'signUp'])->name('sign_up');

Route::get('/home', function () {    
    return view('home');
})->name('home');

