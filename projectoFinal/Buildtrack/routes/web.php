<?php

use App\Http\Controllers\UserController;
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

/* ------------------------------ROTAS DEFULT------------------------------ */
Route::redirect('/', '/home');

Route::fallback(function () {    return view('fallback');});

/* ------------------------------ROTAS DE COMPONTENTES------------------------------ */

Route::get('/home', [UserController::class, 'index'])->name('home');


// USERS
Route::post('/create_user', [UserController::class, 'createUser'])->name('create_user');// rota para adicionar novo user
Route::get('/delete_user{id}', [UserController::class, 'deleteUser'])->name('delete_user'); // rota para eliminar user

// TAREFAS
Route::post('/create_task', [UserController::class, 'createTask'])->name('create_task'); // rota para adicionar nova tarefa
Route::get('/all-tasks', [UserController::class, 'getAllTasks'])->name('all_tasks'); // rota para retornar a tabela com todas as tarefas
Route::get('/delete_task{id}', [UserController::class, 'deleteTask'])->name('delete_task'); // rota eliminar tarefa

/* ------------------------------ROTAS DE VIEWS------------------------------ */

// USERS
Route::get('/home_all_users', [UserController::class, 'all_users'])->name('show_all_users'); // rota que retorna a view para mostrar todos os users
Route::get('/view_user/id={id}', [UserController::class, 'viewUser'])->name('show_user'); // rota que retorna a view para mostrar user

// TAREFAS
Route::get('/view_task/id={id}', [UserController::class, 'viewTask'])->name('show_task'); // rota que retorna a view para mostrar tarefa
Route::get('/home_add_task', [UserController::class, 'addTask'])->name('add_task'); // rota que retorna a view para adicionar nova tarefa
Route::get('/home_add_user', [UserController::class, 'addUser'])->name('add_user'); // rota que retorna a view para adicionar nova tarefa
Route::get('/home_all_tasks', [UserController::class, 'all_tasks'])->name('show_all_tasks'); // rota que retorna a view para mostrar todas as tarefas
