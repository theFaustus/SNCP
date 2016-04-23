<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminTasksController extends Controller
{
    public function updateEmail(){
        $email = Input::get("email");
        return Redirect::away("admin");
    }

    public function updatePassword(){
        $newPassword = Input::get("newPassword");
        $oldPassword = Input::get("oldPassword");
        return Redirect::away("admin");
    }

    public function createArticle(){
        $article_title = Input::get("article_title");
        $article_author = Input::get("article_author");
        $article_institution = Input::get("article_institution");
        $article_description = Input::get("article_description");
        $article_resume = Input::get("article_resume");
        return Redirect::away("admin");
    }

    public function createPublication(){
        $publication_title = Input::get("publication_title");
        return Redirect::away("admin");
    }


}
