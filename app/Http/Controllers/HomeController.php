<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Company;
use App\Models\CompanyImage;
use App\Models\Homeslider;
use App\Models\News;
use App\Models\Partner;
use App\Models\Products;
use Illuminate\Support\Facades\App;
use Session;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     **/
    public function local($lang){
        Session::put('locale',$lang);
        return back();
    }

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setLocale($lang);

        $homeslider = Homeslider::all();
        $response['homeslider']=$homeslider;
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['company'] = $companies;
        $news = News::all();
        $response['news'] = $news;
        $products = Products::all();
        $response['products'] = $products;


        return view('home', compact('response'));
    }


}
