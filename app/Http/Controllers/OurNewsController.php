<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\News;
use App\Models\Partner;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App;


class OurNewsController extends Controller
{
    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setlocale($lang);
    }

    public function OurNews (){
        $partners=Partner::all();
        $response['partners']=$partners;

        $news = News::all();
        $response['news'] = $news;

        $companies = Company::all();
        $response['our_company'] = $companies;

        $paginatenews = News::orderby('id','asc')->paginate(7);
        $response['paginatenews'] = $paginatenews;

        return view('front_page/our-news', compact('response'));
    }

    public function newsDetail($id){

        $partners=Partner::all();
        $response['partners']=$partners;

        $news = News::all();
        $response['news'] = $news;

        $companies = Company::all();
        $response['our_company'] = $companies;

        $newdetail = News::with('newsimages')->where('id',$id)->first();
        $response['newdetail']=$newdetail;

        return view('front_page/news-detail', compact('response'));
    }
}
