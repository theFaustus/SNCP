<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Publication extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'publications';
    public $timestamps = false;
    protected $fillable = array('title', 'publication_date');

    public function createPublication($title, $publicationDate) {
        Publication::create(array('title' => $title, 'publication_date' => $publicationDate));
    }

    public function getPublicationList() {
        $publications = DB::table('publications')->select('id', 'title')->
            orderBy('publication_date', 'desc')->orderBy('title', 'asc')->get();
        $publicationList = array();
        foreach ($publications as $p) {
            $publicationList[] = array('id' => $p->id, 'publication_title' => $p->title);
        }
        return $publicationList;
    }

    public function selectPublicationArchive() {
        /*
        $publications = DB::table('publications')->
        select('id', 'title', 'publication_date')->orderBy('publication_date', 'desc')
            ->orderBy('title', 'asc')->get();
        $publicationList = array();
        foreach ($publications as $p) {
            $publicationList[] = array('id' => $p->id, 'title' => $p->title, 'publication_date' => $p->publication_date);
        }
        return $publicationList;
        */

        $publications = DB::table('publications')->
        select('id', 'publication_date')->orderBy('publication_date', 'desc')->groupBy('publication_date')->get();
        $publicationList = array();
        foreach ($publications as $p) {
            $publicationTitles = DB::table('publications')->select('id', 'title')->orderBy('title', 'asc')
                ->where('publication_date', '=', $p->publication_date)->get();
            $titleList = array();
            foreach ($publicationTitles as $title) {
                $titleList[] = array('id' => $title->id, 'title' => $title->title);
            }
            $publicationList[] = array('id' => $p->id, 'publication_date' => $p->publication_date,
                'titleList' => $titleList);
        }
        return $publicationList;
    }

    public function getPublication($id) {
        /*$articles = DB::table('publications')->join('articles', 'publications.id', '=', 'articles.publication_id')->
        select('publication.id as publication_id', 'title', 'publication_date', 'english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime')->where('publications.id', '=', $id)->get();
        */
        $pub = DB::table('publications')->select('title', 'publication_date')->where('id', '=', $id)->get();
        foreach ($pub as $p) {
            $publication = array('title' => $p->title, 'publication_date' => $p->publication_date,
                'articleList' => array());
        }
        $articles = DB::table('articles')->
        select('english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime')->where('publication_id', '=', $id)->get();
        $articleList = array();
        foreach ($articles as $a) {
            $articleList[] = array('english_title' => $a->english_title, 'romanian_title' => $a->romanian_title,
                'authors' => $a->authors, 'institution' => $a->institution, 'english_description' => $a->english_description,
                'romanian_description' => $a->romanian_description, 'article_file_name' => $a->article_file_name);
        }
        $publication['articleList'] = $articleList;
        return $publication;
    }
}
