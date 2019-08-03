<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
        return view('admin.users.create');
    }
    
    public function store(UserRequest $request)
    {        
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Se ha registrado '. $user->name . ' de forma exitosa!')->success()->important();
        return redirect()->route('users.index');           
    }

    public function destroy(Request $req)
    {
        $id = $req->get('id');
       $user = User::find($id); 
       if ($user->delete()) {
           $response = ['estado' => 1];
       } else {
           $response = ['estado' => 0];
       }
       return response()->json($response);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name  = $request->name;
        $user->email = $request->email;       
        $user->save();
        flash('Se ha Editado '. $user->name . ' de forma exitosa!')->success()->important();
        return redirect()->route('users.index');
    }
}
