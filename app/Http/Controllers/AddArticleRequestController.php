<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use DB;

use App\Http\Requests;

class AddArticleRequestController extends Controller
{
    function handleArticleRequest() {
        $rules = array('file' => 'required|mimes:doc,docx,pdf');
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
            return 'fail';
        }
        else {
            if(Input::hasFile('file')) {

                $f = Input::file('file');
                $fileName = 'article_requests/' . date('Y-m-d_H_m_s') . '-request-' . $f->getClientOriginalName();
                Storage::disk('local')->put($fileName, file_get_contents($f->getRealPath()));
                $file = '../storage/app/' . $fileName;
                \Mail::raw(Input::get('messageBody'), function($message) use ($file)
                {
                    $message->subject(Input::get('subject'));
                    $message->replyTo(Input::get('replyTo'));
                    $message->sender(Input::get('replyTo'));
                    //$message->from('show_latest_articles@mail.com', 'Article');
                    $message->to('tranzistorized@gmail.com');
                    $message->attach($file);
                }, function () use ($fileName) {
                    Storage::disk('local')->delete($fileName);
                });
                return 'success';
            }
        }
    }
}
