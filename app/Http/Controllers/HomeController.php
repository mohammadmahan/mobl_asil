<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        return view('layout/main');
    }
    public function homeMember(){
        return view('memberViews/home');
    }

    public function allProductMember()
    {
        return view('memberViews/allProduct');
    }
    public function singleProductMember(){
        return view('memberViews/singleProduct');
    }
}
