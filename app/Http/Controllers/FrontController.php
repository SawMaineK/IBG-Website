<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Partner;
use Illuminate\Http\Request;
use Validator;
use Session;
use App;
use Mail;
use Config;

use App\Http\Requests;

class FrontController extends Controller
{
    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setlocale($lang);
    }

//    Front Website Controller
    public function AboutUs (){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;
        return view('front_page/about-us', compact('response'));
    }

    public function WelcomeDubai (){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;
        return view('front_page/welcome-to-dubai', compact('response'));
    }

    public function OurCompany (){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;
        return view('front_page/our-company', compact('response'));
    }

    public function VisionMission (){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;
        return view('front_page/vision-and-mission', compact('response'));
    }

    public function contact(){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;
        return view('front_page/contact', compact('response'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required',
            'email'           => 'required|email',
            'subject'              => 'required',
            'message'          => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('contact')
                ->withErrors($validator)
                ->withInput();
        }
        $data = array(
            'user_name'  => $request->name,
            'user_email'  => $request->email,
            'user_subject'  => $request->subject,
            'user_message'  => $request->message,
        );

        $emails = 'sawmainek90@gmail.com';

        Mail::send('emails.contact', $data, function ($m) use ($emails) {
            $m->from(Config::get('mail.from.address'),Config::get('mail.from.name'));
            $m->to($emails,'Intelligence Business Global Company Limited');
            $m->subject('Intelligence Business Global Company Limited');
        });

        return redirect()->back()->with('message',"Successfully Send Mail!");

    }


}
