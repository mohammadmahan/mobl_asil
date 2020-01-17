<?php

namespace App\Http\Controllers\Member;

use App\Models\NewProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformationBlog;
use App\Models\TopSlider;

class HomeController extends Controller
{
    public function main()
    {
        return view('layout/main');
    }
    public function blogMember(){
        return view('memberViews/blog');
    }
    public function homeMember(){
        $newProducts = NewProduct::all();
        $sliders = TopSlider::all();
        $informationblogs = InformationBlog::all();
        return view('memberViews/home',compact('newProducts'),compact('sliders'),compact('informationblogs'));
    }



}
