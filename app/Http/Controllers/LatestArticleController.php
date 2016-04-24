<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class LatestArticleController extends Controller
{
    function getLatestArticles(){
        $publication = new \App\Publication();
        $article = new \App\Article();
        return View::make("index", ["articleList" => $article->getLatestArticles(5),
            "publications" => $publication->selectPublicationArchive()]);
    }
}
