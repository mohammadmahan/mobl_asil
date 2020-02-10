<?php

namespace App\Http\Controllers\Member;

use App\allProductMember;
use App\Models\AboutMember;
use App\price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\NewProduct;

use Illuminate\Support\Facades\DB;

class allProductMemberController extends Controller
{
    public function allProductMember()
    {
        $Abouts = AboutMember::all();
        $priceproducts = price::all();
        $dastebandis = categories::all();
        $allProductMembers = allProductMember::paginate(12);
        return view('memberViews/allProduct',compact('allProductMembers','Abouts','priceproducts','dastebandis'));
    }
    public function withcategory($category_id)
    {
        # code...
        $allProductMembers = allProductMember::where("categories_id",$category_id)->with('category')->paginate(10);
        $Abouts = AboutMember::all();
        $priceproducts = price::all();
        $dastebandis = categories::all();
        return view('memberViews/allProduct',compact('allProductMembers','Abouts','priceproducts','dastebandis'));
    }
    public function withprice($price_id)
    {
        # code...
        $allProductMembers = allProductMember::where("price_id",$price_id)->with('price')->paginate(10);
        $Abouts = AboutMember::all();
        $priceproducts = price::all();
        $dastebandis = categories::all();
        return view('memberViews/allProduct',compact('allProductMembers','Abouts','priceproducts','dastebandis'));
    }
    public function categoryprice($category_id,$price_id)
    {
        # code...
        $products = allProductMember::where("price_id",$price_id)->with('price.category')->get()->toArray();
        dd($products);
    }

     public function singleProductMember($allProductMember_id)
     {
        $Abouts = AboutMember::all();
        $dastebandis = categories::all();
         if ($allProductMember_id && ctype_digit($allProductMember_id)) {
             $productItems = allProductMember::find($allProductMember_id);
             if ($productItems && $productItems instanceof allProductMember) {
                 return view('memberViews/singleProduct', compact('productItems','Abouts','dastebandis'));
             }
         }
     }
    public function searchAllProducts()
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $searchValue = $_GET["searchInput"];
            $currentValue = allProductMember::where('name', $searchValue)->get();
            return $currentValue;
        }
    }
}
