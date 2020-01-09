<?php

namespace App\Http\Controllers\Management;

use App\AddProduct;
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
         'name	' => request()->input('fullname'),
         'number' => request()->input('number'),
         'pastcost' => request()->input('email'),
         'lastcost' => request()->input('massage'),
     ];
     $new_Product_object = AddProduct::create( $Create_Product);
     if ($new_Product_object && $new_Product_object instanceof AddProduct) {
         return redirect()->route('AddProduct');
     }
   }
}
