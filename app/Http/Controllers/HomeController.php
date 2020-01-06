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
    public function contactMember(){
        return view('memberViews/contact');
    }

    public function aboutMember()
    {
        return view('memberViews/about');
    }

    public function allProductMember()
    {
        return view('memberViews/allProduct');
    }
}
