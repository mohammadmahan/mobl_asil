<?php

namespace App\Http\Controllers\Management;

use App\allProductMember;
use App\Http\Controllers\Controller;
use App\Models\categories;
use App\price;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class ProductsController extends Controller
{
    public function AllProducts()
    {
        $priceproducts =price::all();
        $dastebandis = categories::all();
        $allProductMembers = allProductMember::all();
        return view('ManagementViews/site/products',compact('allProductMembers','priceproducts','dastebandis'));
    }
    public function editProduct($allProductMember_id)
    {
        
        $priceproducts =price::all();
        $dastebandis = categories::all();
        if ($allProductMember_id && ctype_digit($allProductMember_id)) {
            $ProductItem = allProductMember::find($allProductMember_id);
            if ($ProductItem && $ProductItem instanceof allProductMember) {
                return view('ManagementViews/site/editproduct', compact('ProductItem','priceproducts','dastebandis'));
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
        $imageinput = request()->file('imageUZ');
        if ($imageinput!="") {
            $new_image_product_blog_name = request()->file('imageUZ')->getClientOriginalName();
            $resultUZ = request()->file('imageUZ')->move(public_path('Management\images\allproduct'),$new_image_product_blog_name);
        }
        if ($imageinput!="" && $resultUZ instanceof File){
            $product_data['image'] ="/Management/images/allproduct/".request()->file('imageUZ')->getClientOriginalName();
            $product = allProductMember::find($allProductMember_id);
            $product->update($product_data);
            if ($product) {
                return redirect()->route('ProductManagement');
            }
         }
         else{
            $product = allProductMember::find($allProductMember_id);
            $product->update($product_data);
            if ($product) {
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
