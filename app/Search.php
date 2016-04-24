<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Search extends Model
{
    public function search($keywords, $searchField, $searchMode) {
        $query = DB::table('articles')->
        select('english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime', 'article_resume');

        $searchTerms = explode(" ", $keywords);
        if ($searchMode == 'and') {
            foreach ($searchTerms as $term)
                $query->where($searchField, 'like', '%'.$term.'%');
        } else {
            foreach ($searchTerms as $term)
                $query->orWhere($searchField, 'like', '%'.$term.'%');
        }
        $articles = $query->get();

        $articleList = array();
        foreach ($articles as $a) {
            $articleList[] = array('english_title' => $a->english_title, 'romanian_title' => $a->romanian_title,
                'authors' => $a->authors, 'institution' => $a->institution, 'english_description' => $a->english_description,
                'romanian_description' => $a->romanian_description, 'article_file_name' => $a->article_file_name,
                'article_resume' => $a->article_resume);
        }
        return $articleList;
    }
}
