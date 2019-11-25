<?php

namespace App\Http\Controllers;

use App\{User, UserProfile};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $title = 'Listado de guerreros Z';

     /*   return view('users.index')
        ->with('users', User::all())
        ->with('title', 'Listado de Saiyajins');
*/
        return view('users.index', compact( 'users', 'title'));
            
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $request->createUser();
        
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => '',
        ]);

        if ($data['password'] != null){
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);

    }

    function destroy(User $user)
    {
        $user->delete();
         
        return redirect()->route('users.index');
    }
}
