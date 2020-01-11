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

    public function updateProduct($allProductMember_id)
    {
        $products_data = [
            'name' => request()->input('name'),
            'number_product' => request()->input('number_product'),
            'lastcost' => request()->input('lastcost'),
            'pastcost' => request()->input('pastcost'),
            'Description' => request()->input('Description'),
        ];
        $product = allProductMember::find($allProductMember_id);
        $product->update($products_data);
        if ($product) {
            return redirect()->route('ProductManagement');
        }
    }
}
