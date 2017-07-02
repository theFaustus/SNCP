<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class News extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'news';
    public $timestamps = false;
    protected $fillable = array('title', 'add_date', 'description', 'news_file_name',
        'news_file_mime');
    
    public function createNews($newsParameters) {
        News::create($newsParameters);
    }
    
    public function getFile($fileName) {
        return Storage::disk('local')->get($fileName);
    }
	
	public function getNewsFileMime($fileName) {
		$fileMetaData = DB::table('news')->select('news_file_mime')->where('news_file_name', '=', $fileName)->get();
		foreach ($fileMetaData as $f)
			$fileMime = $f->news_file_mime;
		return $fileMime;
	}
	

    public function handleNewsFileUpload() {
        $rules = array('file' => 'required|mimes:doc,docx,pdf');
        $validator = Validator::make(Input::all(), $rules);
        if(/*$validator->fails()*/ false) {
            return false;
        }
        else {
            if(Input::hasFile('file_name')) {
                $f = Input::file('file_name');
                $fileName = date('Y-m-d_H-m-s_') . '-' . $f->getClientOriginalName();
                Storage::disk('local')->put($fileName, file_get_contents($f->getRealPath()));
                $this->insertArticle($fileName, $f->getMimeType());
                return $fileName;
            }
        }
    }

    private function insertNews($fileName, $fileMime) {
        $this->createNews(array('title' => Input::get('title'),
            'add_date' => date('Y-m-d_H-m-s_'), 'description' => Input::get('description'),
            'news_file_name' => $fileName, 'news_file_mime' => $fileMime));
    }
/*
    public function getArticle($id) {
        $newss = DB::table('newss')->
        select('english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime', 'article_resume')->where('id', '=', $id)->get();
        $article = array();
        foreach ($articles as $a) {
            $article = array('english_title' => $a->english_title, 'romanian_title' => $a->romanian_title,
                'authors' => $a->authors, 'institution' => $a->institution, 'english_description' => $a->english_description,
                'romanian_description' => $a->romanian_description, 'article_file_name' => $a->article_file_name,
                'article_resume' => $a->article_resume);
        }
        return $article;
    }
*/
    public function getLatestNews($limit) {
        $news = DB::table('news')->
        select('title', 'add_date',
            'description', 'news_file_name',
            'news_file_mime')->orderBy('id', 'desc')->take($limit)->get();
        $newsList = array();
        foreach ($news as $a) {
            $newsList[] = array('title' => $a->title, 'add_date' => $a->add_date,
                'description' => $a->description, 'news_file_name' => $a->news_file_name, 'news_file_mime' => $a->news_file_mime);
        }
        return $newsList;
    }
}
