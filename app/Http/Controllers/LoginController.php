<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function getAdminPage() {
        $p = new \App\Publication();
        $ad = new \App\Ad();
		$news = new \App\News();
        return View::make('admin', array('publicationList' => $p->getPublicationList(),
            'busyAdList' => $ad->getBusyAdsList(),
            'freeAdList' => $ad->getFreeAdsList(),
			'newsList'=> $news->getLatestNews(50)));
    }

    public function login() {
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
            return redirect()->intended('admin');
        } else {
            return view('login');
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::away('login');
    }
}
