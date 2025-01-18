<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function LoginUser(Request $request) {
        $credentials = $request->validate([
            'email-input' => ['required', 'email'],
            'password-input' => ['required'],
        ]);
    
        $User = User::where('email', $credentials['email-input'])->first();
    
        if ($User && $credentials['password-input'] == $User->password) {
            Auth::login($User);
            return redirect()->intended('/mainpage');
        }
    

        return back()->withErrors([
            'email-input' => 'Invalid email or password.',
        ])->withInput();
    }
    
}
