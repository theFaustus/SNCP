<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class ArticleController extends Controller
{
    public function getArticles()
    {
        return View::make("view-publication")->with("articleList", array(array("romanian_title"=> "Alabama sucking bitches","authors"=>"George Carling", "institution"=>"White House", "romanian_description"=>"Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac?
I have as much authority as the Pope, I just don't have as many people who believe it.
The main reason Santa is so jolly is because he knows where all the bad girls live.", "article_file_name"=>"jirosa.pdf"),array("romanian_title"=> "Alabama sucking bitches","authors"=>"George Carling", "institution"=>"White House", "romanian_description"=>"Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac?
I have as much authority as the Pope, I just don't have as many people who believe it.
The main reason Santa is so jolly is because he knows where all the bad girls live.","article_file_name"=>"jirosa.pdf")));
    }

    public function getPublicationArticles($publicationId) {
        $article = new \App\Article();
        $publication = new \App\Publication();
       return View::make("view-publication", array('articleList' => $article->getPublicationArticles($publicationId),
           'publication' => $publication->getPublication($publicationId)));
    }

    public function getArticleFile($fileName) {
        $article = new \App\Article();
        return Response::make($article->getFile($fileName), 200, array('content-type' => 'application/pdf'));
    }
}
