<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;



class UsersController extends Controller
{
    public function index()
    {
    	$users= User::orderBy('id','desc')->paginate(5);
    	return view('admin.user.index')->with('users',$users);
    }

    public function create()
    {
    	return view('admin.user.create');
    }

    public function store(Request $request)
    {
    		$user = new User($request->all());
    		$user->password = bcrypt($request->password);
    		$user->type ="MEMBER";
    		$user->save();

    		Flash::success("Se ha Registrado " .$user->name. " de Forma Exitosa");
    		return redirect()->route('admin.users.index');
    }

    public function show($id)
    {


    }

    public function edit($id)
    {
    	$users = User::find($id);
    	return view('admin.user.edit')->with('users',$users);

    }

    public function update(Request $request, $id)
    {
    		$users= User::find($id);
    		$users->name = $request->name;
    		$users->email = $request->email;
    		$users->type= $request->type;
    		$users->save();

    		Flash::success("Actualizado con exito el Usuario " .$users->name. " categoria " .$users->type. "" );
    		return redirect()->route('admin.users.index');
    }


    public function destroy($id)

    {
    		$user = User::find($id);
    		$user->delete();
    		Flash::error("El Usuario " .$user->name." ha sido eliminado con exito");
    		return redirect()->route('admin.users.index');

    }

    
}

