<?php

namespace App\Http\Controllers\Member;

use App\Models\AboutMember;
use App\Models\NewProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformationBlog;
use App\Models\ProductIndex;
use App\Models\TopSlider;

class HomeController extends Controller
{
    public function main()
    {
        $Abouts = AboutMember::all();
        return view('layout/main',compact('Abouts'));
    }
    public function blogMember($blog_id){
        $Abouts = AboutMember::all();
        if ($blog_id && ctype_digit($blog_id)) {
            $productItem = InformationBlog::find($blog_id);
            if ($productItem && $productItem instanceof InformationBlog) {
        return view('memberViews/blog',compact('Abouts'));
            }
        }
    }
    public function homeMember(){
        $Abouts = AboutMember::all();
        $newProducts = NewProduct::all();
        $sliders = TopSlider::all();
        $InformationBlogs = InformationBlog::all();
        $Productindexs = ProductIndex::all();
        return view('memberViews/home',compact('newProducts','sliders','InformationBlogs','Abouts','Productindexs'));
    }
}
