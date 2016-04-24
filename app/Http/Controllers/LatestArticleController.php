<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class LatestArticleController extends Controller
{
    function getLatestArticles(){
        $publication = new \App\Publication();
        return View::make("index", ["articleList" => array(array("romanian_title" => "Alabama sucking bitches", "authors" => "George Carling", "institution" => "White House", "romanian_description" => "Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac?
I have as much authority as the Pope, I just don't have as many people who believe it.
The main reason Santa is so jolly is because he knows where all the bad girls live.", "article_file_name" => "jirosa.pdf"), array("romanian_title" => "Alabama sucking bitches", "authors" => "George Carling", "institution" => "White House", "romanian_description" => "Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac?
I have as much authority as the Pope, I just don't have as many people who believe it.
The main reason Santa is so jolly is because he knows where all the bad girls live.", "article_file_name" => "jirosa.pdf")),
            "publications" => $publication->selectPublicationArchive()]);
            //"publications" => array(array("publication_date" => "2015", "id" => 1, "titleList" => array(array("id" => 1, "title" => "Numarul 1"), array("id" => 2, "title" => "Numarul 2"))), array("publication_date" => "2015", "id" => 1, "titleList" => array(array("id" => 1, "title" => "Numarul 1"), array("id" => 2, "title" => "Numarul 2"))))]);

    }
}
