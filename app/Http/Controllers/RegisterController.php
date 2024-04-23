<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('username'));
        // Modificar el Reques      "esto solo se hace en el ultimo caso"
        $request->request->add(['username' => Str::slug($request->username)]);
        //validacion
        $this->validate($request, [
            'name'=> 'required|min:2|max:30',
            'username'=> 'required|unique:users|max:20',
            'email'=> 'required|unique:users|email|max:60',
            'password'=> 'required|confirmed|min:6',
            //'password_confirmation'=> 'required',
            
        ]);
       //User::create es el equivalente a: ->Insert into
        User::create([
            'name'=>$request->name,
            'username'=> $request->username,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        // Autenticar un usuario   
        /*auth()->attempt([
            'email'=> $request->email,
            'password'=>$request->password
        ]);*/

        // OTRA FORMA
        auth()->attempt($request->only('email','password'));

        // Redireccionar
        return redirect()->route('posts.index',auth()->user()->username);;

    }
}
