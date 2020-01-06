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
}
