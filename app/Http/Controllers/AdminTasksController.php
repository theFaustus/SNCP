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
        $admin = new \App\Administrator();
        $admin->updateEmail(1, $email);
        return Redirect::away("admin");
    }

    public function updatePassword(){
        $newPassword = Input::get("newPassword");
        $oldPassword = Input::get("oldPassword");
        $admin = new \App\Administrator();
        $admin->updatePassword(1, $newPassword);
        return Redirect::away("admin");
    }

    public function createNews(){
        $news = new \App\News();
        $fileName = $news->handleNewsFileUpload();
        return Redirect::away("admin");
    }
	
	public function createArticle(){
        $article = new \App\Article();
        $fileName = $article->handleArticleFileUpload();
        return Redirect::away("admin");
    }

    public function createPublication(){
        $publication_title = Input::get("publication_title");
        $publication = new \App\Publication();
        $publication->createPublication($publication_title, date('Y-m-d'));
        return Redirect::away("admin");
    }
}
