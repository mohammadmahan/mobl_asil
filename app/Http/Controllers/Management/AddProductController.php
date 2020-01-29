<?php

namespace App\Http\Controllers\Management;

use App\AddProduct;
use App\allProductMember;
use App\Http\Controllers\Controller;
use App\Models\categories;
use App\price;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
   public function AddProduct(){
      $priceproducts = price::all();
      $dastebandis = categories::all();
    return view('ManagementViews/site/addproduct',compact('priceproducts','dastebandis'));
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
         'categories_id' => request()->input('categories'),
         'price_id' => request()->input('price'),
     ];
     $new_Product_object = allProductMember::create( $Create_Product);
     if ($new_Product_object && $new_Product_object instanceof allProductMember) {
         return redirect()->route('ProductManagement');
     }
   }
}
