<?php

namespace App\Http\Controllers\Member;

use App\allProductMember;
use App\Models\AboutMember;
use App\Models\NewProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InformationBlog;
use App\Models\ProductIndex;
use App\Models\TopSlider;
use App\Models\price;
use App\price as AppPrice;

class HomeController extends Controller
{
    public function main()
    {
        $Abouts = AboutMember::all();
        return view('layout/main',compact('Abouts'));
    }
   

    public function homeMember(){
        $Abouts = AboutMember::all();
        $newProducts = NewProduct::all();
        $sliders = TopSlider::all();
        $InformationBlogs = InformationBlog::all();
        $Productindexs = ProductIndex::all();
        $priceproduct = AppPrice::all();
        $allProductMembers = allProductMember::orderBy('id','desc') ->take(10)->get();
        return view('memberViews/home',compact('newProducts','sliders','InformationBlogs','Abouts','Productindexs','priceproduct','allProductMembers'));
    }

    public function blogMember($blog_id){
        $Abouts = AboutMember::all();
        if ($blog_id && ctype_digit($blog_id)) {
            $InformationBlogs= InformationBlog::find($blog_id);
            if ($InformationBlogs && $InformationBlogs instanceof InformationBlog) {
                return view('memberViews/blog',compact('Abouts','InformationBlogs')); 
            }
        }
        
    }
}
