<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller {
    
    public function dashboard() {

        if (Auth::check()) {
            return view('account.dashboard');
        }

        return redirect()->route('auth.signin')->withError('Whoops... You need to sign in to view that page!');

    }

}
