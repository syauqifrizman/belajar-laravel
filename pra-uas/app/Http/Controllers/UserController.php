<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUserData(User $author){
        return view('about', [
            "title" => "About",
            "author" => $author,
            "image" => "syauqi.jpg",
           ]);
    }

    public function getAllUser(){
        return view('authors', [
            "title" => "All Author",
            "users" => User::all(),
        ]);
    }

    public function loginPage(){
        return view('login.index', [
            "title" => 'Login'
        ]);
    }

    public function registerPage(){
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function storeAccount(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|max:15|unique:users',
            'name' => 'required|max:20',
            'password' => 'required|min:5|max:15',
            'password_confirmation' => 'required|min:5|max:15|same:password'
        ]);

        $userData = [
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'name' => $validatedData['name'],
            'password' => Hash::make($validatedData['password']),
        ];

        User::create($userData);

        return redirect()->route('loginPage')->with('success', 'Registration Success');
    }
}
