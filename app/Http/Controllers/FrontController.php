<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Partner;
use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{

//    Front Website Controller
    public function AboutUs (){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;
        return view('front_page/about-us', compact('response'));
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

}
