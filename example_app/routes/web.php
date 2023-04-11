<?php

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
    return view('welcome');
});

Route::get('/hello world', function () {
    return "<h1>Hello World<\h1>";
});

Route::get('/DBZ', function () {
    return "<h1>Champa</h1>";
});

Route::get('/contacts', function () {
    return "<h1>Sou os contactos</h1>";
})->name('contacts.show');

Route::fallback(function () {
    return "<h1>Desculpe a página não existe.</h1>";
});

Route::get('/simple_php_route', function () { // o nome da rota é qualquer um
    return view('simple_php');                // a view tem que ter o mesmo nome 
});

Route::get('/laravel-blade', function () {
    return view('my_laravel');
});

Route::get('/home', function () {
    return view('users/home');
})->name('home');



Route::get('/home_users', [UserController::class, 'index']

function() {
    return view('users.all_users');
})->name->('show_all_users');


Route::get('/home_user', function () {
    return view('users.new_user');
})->name('add_new-user');
