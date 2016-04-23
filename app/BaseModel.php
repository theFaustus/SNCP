<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BaseModel extends Model
{
    public function selectQuery($selectQuery) {
        return DB::select($selectQuery);
    }

    public function sqlStatement($sqlStatement) {
        return DB::statement($sqlStatement);
    }
}
