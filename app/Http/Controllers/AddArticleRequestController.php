<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

use App\Http\Requests;

class AddArticleRequestController extends Controller
{
    function handleArticleRequest() {
        $rules = array('file' => 'required|mimes:doc,docx,pdf');
        $validator = Validator::make(Input::all(), $rules);
        if(/*$validator->fails()*/ false) {
            return 'fail';
        }
        else {
            if(Input::hasFile('file')) {

                $f = Input::file('file');
                $fileName = 'article_requests/' . date('Y-m-d_H-m-s') . '-request-' . $f->getClientOriginalName();
                Storage::disk('local')->put($fileName, file_get_contents($f->getRealPath()));
                $file = '../storage/app/' . $fileName;
                if (\Mail::raw(Input::get('messageBody'), function($message) use ($file)
                {
                    //$message->from(Input::get('sender'));
                    $message->subject(Input::get('subject'));
                    $message->replyTo(Input::get('replyToEmail'));
                    $message->sender(Input::get('replyToEmail'));
                    //$message->from('show_latest_articles@mail.com', 'Article');
                    $message->to('ao.sncp.rm@gmail.com');
                    $message->attach($file);
                })) {
                        Storage::disk('local')->delete($fileName);
                };
                return Redirect::away("contacts");
            } else {
				if (\Mail::raw(Input::get('messageBody'), function($message)
                {
                    //$message->from(Input::get('sender'));
                    $message->subject(Input::get('subject'));
                    $message->replyTo(Input::get('replyToEmail'));
                    $message->sender(Input::get('replyToEmail'));
                    //$message->from('show_latest_articles@mail.com', 'Article');
                    $message->to('ao.sncp.rm@gmail.com');

                })){};
                return Redirect::away("contacts");
			}
        }
    }
}
