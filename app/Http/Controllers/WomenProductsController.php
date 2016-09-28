<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Partner;
use App\Models\Products;
use Illuminate\Http\Request;

use App\Http\Requests;

class WomenProductsController extends Controller
{
    public function productsForWomen(){
        $partners=Partner::all();
        $response['partners']=$partners;

        $companies = Company::all();
        $response['our_company'] = $companies;

        $womenproducts = Products::with('productsimages')->wheregender(' Female')->orderby('id','desc')->get();
        $response['womenproducts']=$womenproducts;

        return view('front_page/women-products',compact('response'));
    }
}
