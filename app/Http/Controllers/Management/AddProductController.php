<?php

namespace App\Http\Controllers\Management;

use App\AddProduct;
use App\allProductMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
   public function AddProduct(){
    return view('ManagementViews/site/addproduct');
   }
   public function createProduct(Request $request)
   {
      $Create_Product = [
         'name' => request()->input('name'),
         'number_product' => request()->input('number_product'),
         'lastcost' => request()->input('lastcost'),
         'pastcost' => request()->input('pastcost'),
         'image' => request()->input('imageproduct'),
         'Description' => request()->input('Description'),
     ];
     $new_Product_object = allProductMember::create( $Create_Product);
     if ($new_Product_object && $new_Product_object instanceof allProductMember) {
         return redirect()->route('ProductManagement');
     }
   }
}
