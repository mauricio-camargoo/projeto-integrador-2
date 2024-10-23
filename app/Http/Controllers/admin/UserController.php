<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        // dd($users);
        return view('admin.users.index', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request){
        User::create($request->validated());
        return redirect()->route('users.index')
                         ->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(string $id){
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('warning', 'usuário não localizado!');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, string $id){
        if (!$user = User::find($id)) {
            return back()->with('warning', 'Usuário não localizado!');
        }
        $data = $request->validated();
        if ($user->password) {
            $data['password'] = bcrypt($request->password); //bcrypt($request->password) erro
        }
        $user->update($data);
        return redirect()
                ->route('users.index')
                ->with('success', 'Usuário atualizado com sucesso!');
    }

    public function show(string $id){
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('warning', 'usuário não localizado!');
        }
        return view('admin.users.show', compact('user'));
    }

    public function destroy(string $id){
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('warning', 'usuário não localizado!');
        }
        if ($user->permission == "adm"){
            return redirect()->route('users.index')->with('error', 'Você não pode apagar administradores!');
        }else{
            $user->delete();
        }

        return redirect()->route('users.index')->with('success', 'usuário APAGADO!');
    }

}
