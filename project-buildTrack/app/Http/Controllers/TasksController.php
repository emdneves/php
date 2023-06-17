<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    /* ----------MOSTRAR TODAS AS TAREFAS---------- */

    public function show_all_tasks(Request $request)
    {
        $selectedCategoryId = $request->input('category_id');
        $allTasks = $this->getAllTasks();
        $categories = Category::all();

        return view('tasks.all_tasks', compact('allTasks', 'selectedCategoryId', 'categories'));
    }


    /* ----------VER TAREFA POR ID---------- */

    public function viewTask($id)
    {
        $ourTask = Task::find($id);
        return view('tasks.view_task', compact('ourTask'));
    }

    /* ----------APAGAR TAREFA POR ID---------- */

    public function deleteTask($id)
    {
        Task::destroy($id);
        return back();
    }

    /* ----------MOSTRAR TODAS AS TAREFAS---------- */

    protected function getAllTasks()
    {
        $allTasks = Task::join('categories', 'categories.id', '=', 'tasks.category_id')
            ->select('tasks.*', 'categories.name as category_name')
            ->get();

        return $allTasks;
    }


    /* ----------MOSTRAR VIEW PARA ADICIONAR TAREFA---------- */

    public function addTask()
    {
        $categories = Category::all();
        $allUsers = User::all();

        return view('tasks.add_task', compact('categories', 'allUsers'));
    }

    /* ----------ADICIONAR TAREFA---------- */

    public function storeTask(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'article' => 'required|string|max:255',
            'cost' => 'required|numeric',
            'measure' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        $task = new Task();
        $task->category_id = $request->category_id;
        $task->article = $request->article;
        $task->cost = $request->cost;
        $task->measure = $request->measure;
        $task->type = $request->type;

        $task->save();

        return redirect()->route('show_all_tasks')->with('message', 'Tarefa adicionada com sucesso');
    }
}
