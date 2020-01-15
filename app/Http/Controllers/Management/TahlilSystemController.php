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

class TahlilSystemController extends Controller
{

    public function TahlilSystem(){
        return view('ManagementViews/site/tahlilsystem');
    }

/*************TAHLIL TOP SLIDER***************/
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
        $slider = TopSlider::find($topslider_id);
        $slider->update($slider_data);
        if ($slider) {
            return redirect()->route('editSlider');
        }
    }

/*************TAHLIL TOP SLIDER***************/

/*************TAHLIL PRODUCT INDEX*************/
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
        $slider_data = [
            'title' => request()->input('title'),
            'number_product' => request()->input('number_product'),
            'price' => request()->input('price'),
            'Description' => request()->input('Description'),
        ];
        $productindex = productIndex::find($productindex_id);
        $productindex->update($productindex_id);
        if ($productindex) {
            return redirect()->route('ManagementProductIndexEdit');
        }
    }


/*************TAHLIL PRODUCT INDEX*************/

/*************TAHLIL PAGE ABOUT***************/
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
/*************TAHLIL PAGE ABOUT***************/


    public function TahlilProductNew(){
        $newproducts = NewProduct::all();
        return view('ManagementViews/site/tahlilProductNew',compact('newproducts'));
    }


    public function TahlilBlog(){
        $informationblogs = InformationBlog::all();
        return view('ManagementViews/site/tahlilBlog',compact('informationblogs'));
    }
    
   
}
