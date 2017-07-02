<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
class NewsController extends Controller
{
	public function getLatestNews()
	{
		$publication = new \App\Publication();
        $article = new \App\Article();
        $ad = new \App\Ad();
		$news = new \App\News();
        return View::make("news", ["articleList" => $article->getLatestArticles(5),
            "publications" => $publication->selectPublicationArchive(),
            'adList' => $ad->getAdsList()], ["newsList" => $news->getLatestNews(10)]);
	}
	
	public function getNewsFile($fileName)
    {
        $news = new \App\News();
        return Response::make($news->getFile($fileName), 200,
            array('content-type' => $news->getNewsFileMime($fileName)));
    }
   
}