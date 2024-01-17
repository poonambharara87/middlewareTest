<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Auth;
use App\Models\User;

class AuthController extends Controller
{
    // public function index()
    // {
    //     $user = User::all();
    //     if($users)
    //     {
    //         return view('dashboard', ['users' => $users]);
    //     }
    // }

    // public function store()
    // {
        
    // }

    public function registration(Request $request)
    {
        $rules = [
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|confirmed|min:8'
        ];
        $messages = [
            'username.required' => 'This field is required',
            'username.string' => 'This field is string',
            'email.required' => 'This field is required',
            'email.email' => 'Please fill valid email',
            'password.requied' => 'This field is required',
            'password.confirmed' => 'Please match the password',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
        {
            return redirect->back()->withErrors($validator, 'register');
        }

        $user =  User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
        ]);
        
        return redirect('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }{
            return redirect('login');
        }
    }

    public function test(){
        return view('dashboard');
    }
}
