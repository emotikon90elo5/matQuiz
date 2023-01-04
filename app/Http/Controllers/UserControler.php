<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserControler extends Controller
{
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request){
        $formDate = $request->validate([
            'name' => ["required","min:3", Rule::unique('users', 'name')],
            'email' => ["required","email", Rule::unique('users', 'email')],
            'password' => ['required',"confirmed", 'min:6'],
            'type' => ["required"]
        ]);
        $formDate['password'] = bcrypt($formDate['password']);

        $user = User::create($formDate);

        auth()->login($user);

        return redirect('/');
    }
    public function show(){
        return view("auth.login");
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }
    public function auth(Request $request){
        $formDate = $request->validate([
            'name' => ["required"],
            'password' => ['required'],
        ]);
        if(auth()->attempt($formDate)){
            $request->session()->regenerate();

            return redirect("/");
        }

        return back()->withErrors;



    }
    //
}
