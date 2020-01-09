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
    public function editProduct($allProductMember_id)
    {
        if ($allProductMember_id && ctype_digit($allProductMember_id)) {
            $ProductItem = allProductMember::find($allProductMember_id);
            if ($ProductItem && $ProductItem instanceof allProductMember) {
                return view('ManagementViews/site/editproduct', compact('ProductItem'));
            }
        }
    }

    public function updateProduct()
    {
        
    }
}
