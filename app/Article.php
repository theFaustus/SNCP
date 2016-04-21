<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
    
    public function getFile($fileName) {
        return Storage::disk('local')->get($fileName);
    }

    public function handleArticleFileUpload() {
        $rules = array('file' => 'required|mimes:doc,docx,pdf');
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
            return false;
        }
        else {
            if(Input::hasFile('file')) {
                $f = Input::file('file');
                $fileName = date('Y-m-d') . '-' . $f->getClientOriginalName();
                Storage::disk('local')->put($fileName, file_get_contents($f->getRealPath()));
                $this->insertArticle($fileName, $f->getMimeType());
                return true;
            }
        }
    }

    private function insertArticle($fileName, $fileMime) {
        $this->createArticle(array('english_title' => Input::get('english_title'), 'romanian_title' => Input::get('romanian_title'),
            'authors' => Input::get('authors'), 'institution' => Input::get('institution'),
            'publication_id' => Input::get('publication_id'), 'english_description' => Input::get('english_description'),
            'romanian_description' => Input::get('romanian_description'), 'article_file_name' => $fileName,
            'article_file_mime' => $fileMime));
    }
}
