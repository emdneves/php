<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index()
    {
        return view('users.home');
    }


/* ----------MOSTRAR TODOS OS USERS---------- */

public function all_users()
{
    $search = request()->query('search') ?? null;

    if (request()->query('user_id')) {
        $allUsers = DB::table('users')
            ->where('id', request()->query('user_id'))
            ->get();
    } else {
        $query = DB::table('users');

        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        }

        $allUsers = $query->get();
    }

    $usersInfo = $this->getAllUsersInfo();

    return view('users.all_users', compact('usersInfo', 'allUsers'));
}


/* ----------MOSTRAR INFO DOS USERS---------- */

public function getAllUsersInfo()
{
    $usersInfo = DB::table('users')->select('id', 'name', 'email')->get();

    return $usersInfo;
}


/* ----------MOSTRAR USER---------- */

    public function viewUser($id)
    {
        $ourUser = DB::table('users')
            ->where('id', $id)
            ->first();

        return view('users.view_user', compact('ourUser'));
    }



/* ----------EDITAR USER---------- */

    public function editUser(Request $request)
    {
        $request->validate(['name' => 'required']);

        $photo = null;

        if ($request->hasFile('photo')) {

            $photo = Storage::putFile('uploadedFiles', $request->photo);
        }

        DB::table('users')
            ->where('id', $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'photo' => $photo,
                ]
            );

        return redirect('home_all_users')->with('message', 'Utilizador editado com sucesso');
    }


/* ----------APAGAR USER---------- */

public function deleteUser($id)
{
    DB::table('users')
        ->where('id', $id)
        ->delete();

    return back();
}

/* ----------MOSTRAR VIEW PARA ADICIONAR USER---------- */

    public function addUser()
    {
        return view('users.add_user');
    }


/* ----------ADICIONAR USER---------- */

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

        return redirect('home_all_users')->with('message', 'Utilizador adicioonado com sucesso');
    }

/* ----------RESET PASSWORD---------- */

    public function resetPass()
    {
        return view('auth.reset_pass');
    }

    public function logout()
{
    auth()->logout();

    return redirect('/')
        ->with('status', 'You have been logged out successfully.')
        ->with('alert-type', 'success');
}
}
