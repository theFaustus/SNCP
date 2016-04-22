<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function getAdminPage() {
        return view('admin_view');
    }

    public function login() {
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
            return redirect()->intended('admin');
        } else {
            return view('login', array());
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::away('login');
    }
}
