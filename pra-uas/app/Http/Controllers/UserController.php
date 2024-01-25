<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserData(User $user){
        return view('about', [
            "title" => "About",
            "user" => $user,
            "image" => "syauqi.jpg",
           ]);
    }

    public function getAllUser(){
        return view('authors', [
            "title" => "All Author",
            "users" => User::all(),
        ]);
    }
}
