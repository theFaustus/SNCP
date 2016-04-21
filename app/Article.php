<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'articles';
    public $timestamps = false;
    protected $fillable = array('english_title', 'romanian_title', 'authors', 'institution',
        'publication_id', 'english_description', 'romanian_description', 'article_file_name',
        'article_file_mime');
    
    public function createArticle($articleParameters) {
        Article::create($articleParameters);
    }
}
