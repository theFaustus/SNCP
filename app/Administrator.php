<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Administrator extends Model
{
    public function updateEmail($id, $email) {
        DB::table('users')->where('id', '=', $id)->update(['email' => $email]);
    }

    public function updatePassword($id, $password) {
        DB::table('users')->where('id', '=', $id)->update(['password' => bcrypt($password)]);
    }
}
