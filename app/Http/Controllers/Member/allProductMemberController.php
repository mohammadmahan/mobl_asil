<?php

namespace App\Http\Controllers\Member;

use App\allProductMember;
use App\Models\AboutMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
         if ($allProductMember_id && ctype_digit($allProductMember_id)) {
             $productItem = allProductMember::find($allProductMember_id);
             if ($productItem && $productItem instanceof allProductMember) {
                 return view('memberViews/singleProduct', compact('productItem'));
             }
         }
     }
}
