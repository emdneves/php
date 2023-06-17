<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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
Route::redirect('/', '/home');

Route::fallback(function () {
    return view('fallback');
});

/* Software Developer */

Route::get(
    '/home',
    [UserController::class, 'index']
)->name('home');

Route::get(
    '/home_all_users',
    [UserController::class, 'all_users']
)->name('show_all_users');

Route::get(
    '/home_all_tasks',
    [UserController::class, 'all_tasks']
)->name('show_all_tasks');

Route::get(
    '/view_task/id={id}',
    [UserController::class, 'viewTask']
)->name('show_task');

Route::get(
    '/delete_task{id}',
    [UserController::class, 'deleteTask']
)->name('delete_task');

Route::get(
    '/view_user/id={id}',
    [UserController::class, 'viewUser']
)->name('show_user');

Route::post(
    '/update_user',
    [UserController::class, 'editUser']
)->name('update_user');

Route::get(
    '/delete_user{id}',
    [UserController::class, 'deleteUser']
)->name('delete_user');

Route::get('/home_add_user',   [UserController::class, 'addUser'])->name('add_user');
Route::post('/create_user',   [UserController::class, 'createUser'])->name('create_user');


Route::get('/home_add_task',   [UserController::class, 'addTask'])->name('add_task');
Route::post('/create_task',   [UserController::class, 'storeTask'])->name('create_task');

Route::get('/dashboard',   [DashboardController::class, 'index'])->name('dashboard-index');

Route::get('/reset-pass',   [UserController::class, 'resetPass'])->name('reset-pass');
