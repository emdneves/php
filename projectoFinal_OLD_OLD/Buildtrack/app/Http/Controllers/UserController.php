<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $aMinhaVariavel = "Hello turma de Soft Dev!";

        $usersModel = User::all();

        return view('users.home', compact('aMinhaVariavel'));
    }

    public function all_users()
    {
        $oMeuArray = [
            'nome' => 'Sara',
            'nome2' => 'José',
            'nome3' => 'Rúben',
        ];

        if (request()->query('user_id')) {
            $allUsers = DB::table('users')
                ->where('id', request()->query('user_id'))
                ->get();
        } else {
            $allUsers = DB::table('users')
                ->get();
        }

        $cesaeInfo = $this->getCesaeInfo();

        return view('users.all_users', compact('oMeuArray', 'cesaeInfo', 'allUsers'));
    }



    /* ------------------------------VIEW USER METHOD------------------------------ */

    public function viewUser($id)
    {
        $ourUser = DB::table('users')
            ->where('id', $id)
            ->first();

        return view('users.view_user', compact('ourUser'));
    }

    /* ------------------------------DELETE USER METHOD------------------------------ */

    public function deleteUser($id)
    {

        DB::table('tasks')
            ->where('users_id', $id)
            ->delete();


        DB::table('users')
            ->where('id', $id)
            ->delete();

        return back();
    }

    /* ------------------------------ADD USER METHOD------------------------------ */

    public function addUser()
    {
        return view('users.add_user');
    }

    /* ------------------------------CREATE USER METHOD------------------------------ */


    public function createUser(Request $request)
    {

        $myUser = $request->all();


        $request->validate(
            [
                'email' => 'required|email|unique:users',
                'name' => 'required|string',
                'password' => 'required',
            ]
        );

        User::insert([
            'email' => $request->email,
            'name' =>  $request->name,
            'password' => Hash::make($request->password)
        ]);

        return redirect('home_all_users')->with('message', 'Utilizador adicionado com sucesso');
    }

    /* ------------------------------GET ALL TASK METHOD------------------------------ */

    protected function getAllTasks()
    {
        $allTasks = DB::table('tasks')
            ->join('categories', 'categories.id', '=', 'tasks.category_id')
            ->select('tasks.id', 'categories.name as category_name', 'tasks.article', 'tasks.measure', 'tasks.type', 'tasks.cost')
            ->get();

        return $allTasks;
    }

    /* ------------------------------ADD TASK METHOD------------------------------ */


    public function addTask()
    {
        $allUsers = DB::table('users')
            ->get();
        return view('users.add_task', compact('allUsers'));
    }

    /* ------------------------------CREATE TASK METHOD------------------------------ */


    public function createTask(Request $request)
    {
        $myTarefa = $request->all();

        DB::table('tasks')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        return redirect('home_all_tasks')->with('message', 'Tarefa adicionada com sucesso');
    }

    /* ------------------------------VIEW TASK METHOD------------------------------ */

    public function viewTask($id)
    {
        $ourTask = DB::table('tasks')
            ->where('id', $id)
            ->first();

        return view('users.view_task', compact('ourTask'));
    }

    /* ------------------------------DELETE TASK METHOD------------------------------ */

    public function deleteTask($id)
    {

        DB::table('tasks')
            ->where('id', $id)
            ->delete();

        return back();
    }

    /* ------------------------------GET ALL TASKS METHOD------------------------------ */


    public function all_tasks()
    {
        $selectedCategoryId = request()->query('category_id');

        $allTasksQuery = DB::table('tasks')
            ->join('categories', 'categories.id', '=', 'tasks.category_id')
            ->select('tasks.id', 'categories.name as category_name', 'tasks.article', 'tasks.measure', 'tasks.type', 'tasks.cost');

        if ($selectedCategoryId) {
            $allTasksQuery->where('tasks.category_id', $selectedCategoryId);
        }

        $allTasks = $allTasksQuery->get();

        $categories = DB::table('categories')->get();

        return view('users.all_tasks', compact('allTasks', 'categories', 'selectedCategoryId'));
    }
}
