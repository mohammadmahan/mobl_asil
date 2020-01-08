<?php

namespace App\Http\Controllers;

use App\allProductMember;
use Illuminate\Http\Request;

class allProductMemberController extends Controller
{
    public function allProductMember()
    {
        $allProductMembers = allProductMember::all();
        return view('memberViews/allProduct',compact('allProductMembers'));
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
