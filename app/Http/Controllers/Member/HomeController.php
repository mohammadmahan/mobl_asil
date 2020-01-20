<?php

namespace App\Http\Controllers\Member;

use App\Models\AboutMember;
use App\Models\NewProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformationBlog;
use App\Models\TopSlider;

class HomeController extends Controller
{
    public function main()
    {
        $Abouts = AboutMember::all();
        return view('layout/main',compact('Abouts'));
    }
    public function blogMember(){
        return view('memberViews/blog');
    }
    public function homeMember(){
        $Abouts = AboutMember::all();
        $newProducts = NewProduct::all();
        $sliders = TopSlider::all();
        $InformationBlogs = InformationBlog::all();
        return view('memberViews/home',compact('Abouts','newProducts','sliders','InformationBlogs'));
    }



}
