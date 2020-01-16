<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\productIndex;
use App\Models\AboutMember;
use App\Models\InformationBlog;
use App\Models\NewProduct;
use App\Models\TopSlider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\File;

class TahlilSystemController extends Controller
{

    public function TahlilSystem(){
        return view('ManagementViews/site/tahlilsystem');
    }

/*************START TAHLIL TOP SLIDER***************/
    public function TahlilSlider(){
        $topsliders=TopSlider::all();
        return view('ManagementViews/site/tahlilslider',compact('topsliders'));
    }
    public function editSingleSlider($topslider_id){
        
        if($topslider_id && ctype_digit($topslider_id)){
           $topsliderItem = TopSlider::find($topslider_id);
           if($topsliderItem && $topsliderItem instanceof TopSlider){
            return view('ManagementViews/site/editslider',compact('topsliderItem')); 
           } 
        }
    }
    public function updateSingleSlider($topslider_id){
        $slider_data = [
            'title' => request()->input('title'),
        ];
        $new_image_name = request()->file('imageU')->getClientOriginalName();
        $result = request()->file('imageU')->move(public_path('images\sliders'),$new_image_name);



        if ($result instanceof File){
           $slider_data['image'] ="/images/sliders/". request()->file('imageU')->getClientOriginalName();
            $slider = TopSlider::find($topslider_id);
            $slider->update($slider_data);
            if ($slider) {
                return redirect()->route('ManagementTahlilSlider');
            }
        }

    }

/*************END TAHLIL TOP SLIDER***************/


/************START TAHLIL PRODUCT INDEX**********/
    public function ManagementTahlilProductIndex(){
        $productindexs = productIndex::all();
        return view('ManagementViews/site/tahlilProduct',compact('productindexs'));
    }
     public function productindexedit($productindex_id){
        
        if($productindex_id && ctype_digit($productindex_id)){
           $productItem = productIndex::find($productindex_id);
           if($productItem && $productItem instanceof productIndex){
            return view('ManagementViews/site/editProductIndex',compact('productItem')); 
           } 
        }
    }
    public function productindexupdate($productindex_id){
        $productIndex_data = [
            'title' => request()->input('title'),
            'number_product' => request()->input('number_product'),
            'price' => request()->input('price'),
            'Description' => request()->input('Description'),
        ];
        $productindex = productIndex::find($productindex_id);
        $productindex->update($productIndex_data);
        if ($productindex) {
            return redirect()->route('ManagementTahlilProductIndex');
        }
    }


/*************END TAHLIL PRODUCT INDEX*************/


/*************START TAHLIL PAGE ABOUT***************/
    public function TahlilAboout(){
        $aboutsystems = AboutMember::all();
        return view('ManagementViews/site/tahlilAbout', compact('aboutsystems'));
    }
    public function editAbout()
    {
            $Abouts = AboutMember::all();
            return view('ManagementViews/site/tahlilAbout', compact('Abouts'));
            
    }

    public function updateAbout()
    {
        $About_data = [
            'title' => request()->input('title'),
            'phone' => request()->input('phone'),
            'address' => request()->input('address'),
            'Description' => request()->input('Description'),
        ];
        $about = AboutMember::find(1);
        $about->update($About_data);
        if ($about) {
            return redirect()->route('ManagementTahlilAbout');
        }
    }
/*************END TAHLIL PAGE ABOUT***************/


/*************START TAHLIL PRODUCT NEW***************/
    public function TahlilProductNew(){
        $newproducts = NewProduct::all();
        return view('ManagementViews/site/tahlilProductNew',compact('newproducts'));
    }
    public function productNewedit($productNew_id){
        
        if($productNew_id && ctype_digit($productNew_id)){
           $productNewItem = NewProduct::find($productNew_id);
           if($productNewItem && $productNewItem instanceof NewProduct){
            return view('ManagementViews/site/editProductNew',compact('productNewItem')); 
           } 
        }
    }
    public function productNewupdate($productNew_id){
        $productNew_data = [
            'title' => request()->input('title'),
            'number_product' => request()->input('number_product'),
            'cost' => request()->input('cost'),
            'Description' => request()->input('Description'),
        ];
        $productNew = NewProduct::find($productNew_id);
        $productNew->update($productNew_data);
        if ($productNew) {
            return redirect()->route('ManagementTahlilProductNew');
        }
    }


/*************END TAHLIL PRODUCT NEW***************/


/*************START TAHLIL PAGE BLOG****************/
    public function TahlilBlog(){
        $informationblogs = InformationBlog::all();
        return view('ManagementViews/site/tahlilBlog',compact('informationblogs'));
    }
    public function BlogEdit($Blog_id){
        
        if($Blog_id && ctype_digit($Blog_id)){
           $informationblogItem = InformationBlog::find($Blog_id);
           if($informationblogItem && $informationblogItem instanceof InformationBlog){
            return view('ManagementViews/site/editInformationBlog',compact('informationblogItem')); 
           } 
        }
    }
    public function BlogUpdate($Blog_id){
        $informationblog_data = [
            'title' => request()->input('title'),
            'Description' => request()->input('Description'),
        ];
        $informationblog = InformationBlog::find($Blog_id);
        $informationblog->update($informationblog_data);
        if ($informationblog) {
            return redirect()->route('ManagementTahlilBlog');
        }
    }
 
    

/*************END TAHLIL PAGE BLOG****************/
}
