<?php

namespace App\Http\Controllers\Management;

use App\allProductMember;
use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Price;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class ProductsController extends Controller
{
    public function AllProducts()
    {
        $priceproducts =Price::all();
        $dastebandis = categories::all();
        $allProductMembers = allProductMember::paginate(7);
        return view('ManagementViews/site/products',compact('allProductMembers','priceproducts','dastebandis'));
    }

    public function deleteMassages($allProductMember_id)
    {
        if ($allProductMember_id && ctype_digit($allProductMember_id)) {
            $product = allProductMember::find($allProductMember_id);
            if ($product && $product instanceof allProductMember) {
                $product->delete();
                return redirect()->route('ProductManagement');
            }
        }
    }

    /*************START EDIT ALL PRODUCT***************/

    public function editProduct($allProductMember_id)
    {
        $priceproducts =Price::all();
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

    /*************END EDIT ALL PRODUCT***************/


    public function details(){
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $userId = $_GET["userId"];
            $userItem = allProductMember::find($userId);
            return $userItem;
        }
    }

    public function searchAllProductsManagement()
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $searchValue = $_GET["searchInputManagement"];
            $currentValue = allProductMember::where('number_product', $searchValue)->get();
            return $currentValue;
        }
    }
  
}
