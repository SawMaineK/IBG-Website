<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Company;
use Illuminate\Http\Request;

use App\Http\Requests;

class SignInController extends Controller
{
    public function signIn(){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;

        return view('auth.front_login', compact('response'));
    }

    public function registers(){
        $partners=Partner::all();
        $response['partners']=$partners;
        $companies = Company::all();
        $response['our_company'] = $companies;

        return view('auth.front_registers', compact('response'));
    }
}
