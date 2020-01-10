<?php

namespace App\Http\Controllers\Member;

use App\Models\NewProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function main()
    {
        return view('layout/main');
    }
    public function homeMember(){
        $newProducts = NewProduct::all();
        return view('memberViews/home',compact('newProducts'));
    }


}
