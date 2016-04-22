<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Administrator extends Model
{
    public function updateEmail($id, $email) {
        DB::table('administrators')->where('id', '=', $id)->update(['email' => $email]);
    }

    public function updatePassword($id, $password) {
        DB::table('administrators')->where('id', '=', $id)->update(['password' => $password]);
    }
}
