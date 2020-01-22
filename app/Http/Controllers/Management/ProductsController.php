<?php

namespace App\Http\Controllers\Management;

use App\allProductMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

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

    public function updateProduct($allProductMember_id){
        $product_data = [
            'name' => request()->input('name'),
            'number_product' => request()->input('number_product'),
            'lastcost' => request()->input('lastcost'),
            'pastcost' => request()->input('pastcost'),
            'Description' => request()->input('Description'),
        ];
        $imageinput = request()->file('imageU');
        if ($imageinput!="") {
            $new_image_product_blog_name = request()->file('imageU')->getClientOriginalName();
            $result = request()->file('imageU')->move(public_path('images\allproduct'),$new_image_product_blog_name);    
        }
        if ($imageinput!="" && $result instanceof File){
            $product_data['image'] ="/images/allproduct/".request()->file('imageU')->getClientOriginalName();
            $products = allProductMember::find($allProductMember_id);
            $products->update($product_data);
            if ($products) {
                return redirect()->route('ProductManagement');
            }
         }
         else{
            $products = allProductMember::find($allProductMember_id);
            $products->update($product_data);
            if ($products) {
                return redirect()->route('ProductManagement');
            }
         }
        
    }

    public function details(){
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $userId = $_GET["userId"];
            $userItem = allProductMember::find($userId);
            return $userItem;
        }
    }
   
  
}