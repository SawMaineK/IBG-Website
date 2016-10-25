<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Partner;
use App\Models\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App;

class DubaiPackageController extends Controller
{
    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setlocale($lang);
    }

    public function dubaiPackage(){
        $partners=Partner::all();
        $response['partners']=$partners;

        $news = News::all();
        $response['news'] = $news;

        $companies = Company::all();
        $response['our_company'] = $companies;

        $paginatenews = News::with('newsimages')->wherelocation(' Global')->orderby('id','desc')->paginate(8);
        $response['global'] = $paginatenews;

        return view('front_page.dubai-package', compact('response'));
    }
}
