<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;

class NewsLetterController extends Controller
{

    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setlocale($lang);
    }

    public function newsletter(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=> 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect('home')
                ->withErrors($validator)
                ->withInput();
        }
        $data = array(
            'newsletter_email'  => $request->email,
        );

        $emails = $request->email;

        Mail::send('emails.newsletter', $data, function ($m) use ($emails) {
            $m->from(Config::get('mail.from.address'),Config::get('mail.from.name'));
            $m->to($emails,'Intelligence Business Global Company Limited');
            $m->subject('Intelligence Business Global Company Limited - Welcome to our Newsletter');
        });

        return redirect('/');
    }
}
