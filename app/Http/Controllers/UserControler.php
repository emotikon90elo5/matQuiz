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
            'name' => ["required","min:3"],
            'email' => ["required","email", Rule::unique('users', 'email')],
            'password' => ['required', 'min:6'],
            'type' => ["required"]
        ]);
        $formDate['password'] = bcrypt($formDate['password']);

        $user = User::create($formDate);

        auth()->login($user);

        return redirect('/')->with('massage', 'Stworzono i zalogowano użytkownika.');
    }
    public function show(){
        return view("auth.login");
    }


    //
}
