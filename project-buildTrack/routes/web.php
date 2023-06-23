<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BudgetController;
use App\Http\Providers\FortifyServiceProvider;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Now create something great!
|
*/

Route::get('/login', function () {return view('auth.login');})->name('login');

Route::get('/register', function () {return view('auth.register');})->name('register');;

Route::get('/',[HomeController::class, 'index'])->name('home');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

/* ------------------------------ ROTAS DEFAULT ------------------------------ */

Route::redirect('/', '/home');

Route::fallback(function () { return view('fallback');});

/* ------------------------------ ROTAS DE COMPONENTES ------------------------------ */

Route::get('/home', [UserController::class, 'index'])->name('home');

// USERS
Route::post('/create_user', [UserController::class, 'createUser'])->name('create_user')->middleware('auth'); // Rota para adicionar novo usuário
Route::get('/delete_user{id}', [UserController::class, 'deleteUser'])->name('delete_user')->middleware('auth'); // Rota para excluir usuário

// TAREFAS
Route::post('/create_task', [TasksController::class, 'storeTask'])->name('store_task'); // Rota para adicionar nova tarefa
Route::get('/all-tasks', [TasksController::class, 'getAllTasks'])->name('all_tasks'); // Rota para retornar a tabela com todas as tarefas
Route::get('/delete_task{id}', [TasksController::class, 'deleteTask'])->name('delete_task'); // Rota para excluir tarefa

/* ------------------------------ ROTAS DE VIEWS ------------------------------ */

// USERS
Route::get('/home_all_users', [UserController::class, 'all_users'])->name('show_all_users'); // Rota que retorna a view para mostrar todos os usuários
Route::get('/view_user/id={id}', [UserController::class, 'viewUser'])->name('show_user'); // Rota que retorna a view para mostrar usuário
Route::get('/registar', [UserController::class, 'addUser'])->name('add_user'); // Rota que retorna a view para adicionar novo usuário

// TAREFAS
Route::get('/view_task/id={id}', [TasksController::class, 'viewTask'])->name('show_task'); // Rota que retorna a view para mostrar tarefa
Route::get('/home_add_task', [TasksController::class, 'addTask'])->name('add_task'); // Rota que retorna a view para adicionar nova tarefa
Route::get('/home_all_tasks', [TasksController::class, 'show_all_tasks'])->name('show_all_tasks'); // Rota que retorna a view para mostrar todas as tarefas

/* ------------------------------ AUTENTICAÇÃO ------------------------------ */


// Conta
Route::get('/account', [UserController::class, 'account'])->name('account')->middleware('auth');


// Redefinir senha
Route::get('/reset-pass', [UserController::class, 'resetPass'])->name('reset-pass');

/* ------------------------------ DASHBOARD ------------------------------ */

// Dashboard View
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');

/* ------------------------------ CATEGORIAS ------------------------------ */

// Categories
Route::post('/create_category', [CategoryController::class, 'createCategory'])->name('create_category');
Route::get('/all-categories', [CategoryController::class, 'getAllCategories'])->name('all_categories');

// Categorias (Views)
Route::get('/add-category', [CategoryController::class, 'addCategoryView'])->name('add_category_view');
Route::post('/add-category', [CategoryController::class, 'addCategory'])->name('add_category');
Route::get('/all-categories-view', [CategoryController::class, 'allCategoriesView'])->name('all_categories_view');


// Show the edit category form
Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit_category');

// Update the category

Route::put('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update_category');
Route::delete('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete_category');

// ORÇAMENTOS
Route::get('/new-budget', function () { return view('budgets.new_budget'); })->name('new_budget'); // Rota que retorna a view new_budget.blade.php

Route::post('/budgets', [BudgetController::class, 'store'])->name('store_budget');

// Display list of budgets for a user
Route::get('/user/{id}/budgets', [UserController::class, 'userBudgets'])->name('user_budgets');

// View budget details
Route::get('/budget/{id}', [BudgetController::class, 'viewBudget'])->name('view_budget');

// edit user permissions

Route::get('/user/{id}/edit', [UserController::class, 'editUserPermissions'])->name('edit_user');




