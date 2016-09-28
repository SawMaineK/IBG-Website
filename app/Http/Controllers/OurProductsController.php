<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Partner;
use App\Models\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App;


class OurProductsController extends Controller
{
    public function __construct () {
        $lang = Session::get ('locale');
        if ($lang != null)
            App::setlocale($lang);
    }

    public function OurProducts (){
        $partners=Partner::all();
        $response['partners']=$partners;

        $companies = Company::all();
        $response['our_company'] = $companies;

        $products = Products::all();
        $response['products'] = $products;

        $paginateproducts = Products::orderby('id','desc')->paginate(6);
        $response['paginateproducts'] = $paginateproducts;

        return view('front_page/our-products', compact('response'));
    }

    public function productsDetail($id){
        $partners=Partner::all();
        $response['partners']=$partners;

        $companies = Company::all();
        $response['our_company'] = $companies;
        

        $productsimage = Products::with('productsimages')->where('id',$id)->first();
        $response['productsimage']=$productsimage;

        return view('front_page/product_detail', compact('response'));
    }

}
