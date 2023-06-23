<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Task;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /* ----------MOSTRAR VIEW PARA CRIAR ORÇAMENTO---------- */

    public function createBudget()
    {
        return view('budgets.new_budget');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $budget = new Budget();
        $budget->name = $request->name;

        $budget->save();

        return redirect()->route('show_all_tasks')->with('message', 'Budget created successfully.');
    }

    /* ----------ADICIONAR TAREFA AO ORÇAMENTO---------- */

    public function addTaskToBudget(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'quantity' => 'required|numeric|min:1',
        ]);

        $taskId = $request->task_id;
        $quantity = $request->quantity;

        // encontra a tarefa por ID
        $task = Task::findOrFail($taskId);

        // Armazena o ID da tarefa e quantidade na sessão
        $budgetTasks = session()->get('budget_tasks', []);
        $budgetTasks[$task->id] = $quantity;
        session()->put('budget_tasks', $budgetTasks);

        return redirect()->back()->with('success', 'Task added to the budget successfully.');
    }

    /* ----------REMOVER TAREFA DO ORÇAMENTO---------- */

    public function deleteTaskFromBudget($taskId)
    {
        // encontra a tarefa por ID
        $task = Task::findOrFail($taskId);

        // remove a tarefa ao remover a ligação com a sessão
        $budgetTasks = session()->get('budget_tasks', []);
        unset($budgetTasks[$task->id]);
        session()->put('budget_tasks', $budgetTasks);

        return redirect()->back()->with('success', 'Task removed from the budget successfully.');
    }


    /* ----------MOSTRAR ORÇAMENTOS DE UM UTILIZADOR---------- */


public function viewBudget($id)
{
    $budget = Budget::find($id);

    return view('view_budget', ['budget' => $budget]);
}
}
