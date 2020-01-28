<?php

namespace App\Http\Controllers\Management;

use App\AddProduct;
use App\allProductMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

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
         'Description' => request()->input('Description'),
     ];

       $imageinput = request()->file('imageproduct');
       if ($imageinput!="") {
           $new_image_about_name = request()->file('imageproduct')->getClientOriginalName();
           $result = request()->file('imageproduct')->move(public_path('Management\images\Products'),$new_image_about_name);
       }
       if ($imageinput!="" && $result instanceof File){
           $Create_Product['image'] ="/Management/images/Products/".request()->file('imageproduct')->getClientOriginalName();
           $new_Product_object = allProductMember::create($Create_Product);
           if ($new_Product_object) {
               return redirect()->route('ProductManagement');
           }
       }
       else{
           $new_Product_object = allProductMember::create($Create_Product);
           if ($new_Product_object) {
               return redirect()->route('ProductManagement');
           }
       }
   }
}
