<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
