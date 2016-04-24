<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function getSearchResults()
    {

        $searchValue = Input::get('search');
        $searchCriteria = Input::get('criteria');
        $searchMode = Input::get('mode');


        $search = new \App\Search();
        return json_encode($search->search($searchValue, $searchCriteria, $searchMode));


        return json_encode(array(array('romanian_title'=> "George Carling`s Thoughts", 'authors' => "George Carling, Uncle Bob", 'institution' => "Internet",
            'romanian_description' => "Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac?
I have as much authority as the Pope, I just don't have as many people who believe it.
The main reason Santa is so jolly is because he knows where all the bad girls live.", 'article_file_name' => "https://www.google.ru/DeepThoughts.pdf"), array('romanian_title'=> "George Carling`s Thoughts", 'authors' => "George Carling, Uncle Bob", 'institution' => "Internet",
            'romanian_description' => "Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac?
I have as much authority as the Pope, I just don't have as many people who believe it.
The main reason Santa is so jolly is because he knows where all the bad girls live.", 'article_file_name' => "https://www.google.ru/DeepThoughts.pdf")));
    }
}
