<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
class ManageUserController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('Manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
            });
    }

    public function manageUser(){
        $user = User::all();
        return view('Manage.ManageUser', ['user' => $user]);
    }
    public function add(){
        return view('Manage.addUser');
    }
    public function create(Request $request){
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => \Hash::make ($request->password),
        'roles' => $request->roles
    ]);
        return redirect('/ManageUser'); 
    }
    public function edit($id){
        $user = User::find($id);
        return view('Manage.editUser',['user'=>$user]);
    }
    public function update($id, Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::$request->password;
        $user->roles = $request->roles;
        $user->save();
        return redirect('/ManageUser');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/ManageUser');
    }
}