<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Partner;
use App\Models\Products;
use Illuminate\Http\Request;
use Session;
use App;
use App\Http\Requests;

class MenProductsController extends Controller
{
    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setlocale($lang);
    }

    public function productsForMen(){
        $partners=Partner::all();
        $response['partners']=$partners;

        $companies = Company::all();
        $response['our_company'] = $companies;

        $menproducts = Products::wheregender('male')->orderby('id','desc')->get();
        $response['menproducts']=$menproducts;

        return view('front_page/men-products',compact('response'));
    }

    
}
