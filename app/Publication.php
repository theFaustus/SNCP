<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'publications';
    public $timestamps = false;
    protected $fillable = array('title', 'publication_date');

    public function createPublication($title, $publicationDate) {
        Publication::create(array('title' => $title, 'publication_date' => $publicationDate));
    }
}
