<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Partner;
use Illuminate\Http\Request;

use App\Http\Requests;

class OurCompanyController extends Controller
{
    public function OurCompanies (){

        $partners=Partner::all();
        $response['partners']=$partners;

        $companies = Company::all();
        $response['our_company'] = $companies;

        return view('front_page/our-companies', compact('response'));
    }

    public function companyDetail ($id){

        $companies = Company::all();
        $response['our_company'] = $companies;

        $partners=Partner::all();
        $response['partners']=$partners;

//      Company Image Retrieve
        $company = Company::with('companiesimage')->where('id',$id)->first();
        $response['company']=$company;

        return view('front_page/company-detail',  compact('response'));
    }

    
}
