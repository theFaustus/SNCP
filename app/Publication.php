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
}
