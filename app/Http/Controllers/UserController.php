<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);
    
        $incomingFields['password'] = bcrypt($incomingFields['password']);
    
        #session()->put('user', $incomingFields);
    
        #session()->put('logged_in', true);
    
        return view('/homepage');
    }

    public function showHomepage(){
        return 'logged in';
    }
    
}
