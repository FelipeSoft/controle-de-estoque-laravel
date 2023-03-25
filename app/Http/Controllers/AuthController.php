<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $r){
        return view("login");
    }
    public function register(Request $r){
        return view("register");
    }

    public function register_action(Request $r){
        $user = User::create([
            'name' => $r->input('name'),
            'email' => $r->input('email'),
            'password' => Hash::make( $r->input('password') ),
        ]);
        return view("login");
    }
}
