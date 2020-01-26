<?php

namespace App\Http\Controllers\Member;

use App\allProductMember;
use App\Models\AboutMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewProduct;

class allProductMemberController extends Controller
{
    public function allProductMember()
    {
        $Abouts = AboutMember::all();
        $allProductMembers = allProductMember::all();
        return view('memberViews/allProduct',compact('allProductMembers','Abouts'));
    }

     public function singleProductMember($allProductMember_id)
     {
        $newproducts = NewProduct::all(); 
        $Abouts = AboutMember::all();
         if ($allProductMember_id && ctype_digit($allProductMember_id)) {
             $productItem = allProductMember::find($allProductMember_id);
             if ($productItem && $productItem instanceof allProductMember) {
                 return view('memberViews/singleProduct', compact('productItem','Abouts','newproducts'));
             }
         }
     }
}
