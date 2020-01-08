<?php

namespace App\Http\Controllers\Management;

use App\allProductMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function AllProducts()
    {
        $allProductMembers = allProductMember::all();
        return view('ManagementViews/site/products',compact('allProductMembers'));
    }
}
