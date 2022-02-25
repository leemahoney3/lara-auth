<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function signIn() {
        return view('auth.signin');
    }

    public function postSignIn(Request $request) {

        $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->route('account.dashboard')->withSuccess('Woohoo! You have been successfully signed in.');
        
        }

        return redirect()->route('auth.signin')->withError('Whoops... You need to be signed in to do that!');

    }

    public function signUp() {
        return view('auth.signup');
    }

    public function postSignUp(Request $request) {
        
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6'
        ]);

        $data = $request->all();
        
        User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password'])
        ]);

        return redirect()->route('account.dashboard')->withSuccess('Woohoo! You have been successfully signed in.');
        
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect()->route('auth.signin')->withSuccess('Fairwell... You have been signed out successfully!');
    }

}
