<?php

namespace App\Http\Controllers\Management;

use App\Exports\NewslettersExport;
use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use App\Models\productIndex;
use App\Models\AboutMember;
use App\Models\categories;
use App\Models\InformationBlog;
use App\Models\NewProduct;
use App\Models\TopSlider;
use App\price;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\File\File;

class TahlilSystemController extends Controller
{

    public function TahlilSystem(){
        return view('ManagementViews/site/tahlilsystem');
    }

/*************START TAHLIL TOP SLIDER***************/
    public function TahlilSlider(){
        $topsliders=TopSlider::paginate(7);
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
        $imageinput = request()->file('imageU');
        if ($imageinput!="") {
        $new_image_name = request()->file('imageU')->getClientOriginalName();
        $result = request()->file('imageU')->move(public_path('images\sliders'),$new_image_name);
         }

        if ($imageinput!="" && $result instanceof File){
            $slider_data['image'] ="/images/sliders/". request()->file('imageU')->getClientOriginalName();
            $slider = TopSlider::find($topslider_id);
            $slider->update($slider_data);
            if ($slider) {
                return redirect()->route('ManagementTahlilSlider');
            }
        }
        else{
            $slider = productIndex::find($topslider_id);
            $slider->update($slider_data);
            if ($slider) {
                return redirect()->route('ManagementTahlilSlider');
            }
        }  
    }

    public function AddSingleSlider(){

        return view('ManagementViews/site/addslider');
    }

    public function createSingeSlider(Request $request)
    {
        $Create_Slider = [
            'title' => request()->input('title'),
        ];

        $imageinput = request()->file('imageSlider');
        if ($imageinput!="") {
            $new_image_name = request()->file('imageSlider')->getClientOriginalName();
            $result = request()->file('imageSlider')->move(public_path('Management\images\slider'),$new_image_name);
        }
        if ($imageinput!="" && $result instanceof File){
            $Create_Slider['image'] ="/Management/images/slider/".request()->file('imageSlider')->getClientOriginalName();
            $new_Slider_object = TopSlider::create($Create_Slider);
            if ($new_Slider_object) {
                return redirect()->route('ManagementTahlilSlider');
            }
        }
        else{
            $new_Slider_object = TopSlider::create($Create_Slider);
            if ($new_Slider_object) {
                return redirect()->route('ManagementTahlilSlider');
            }
        }
    }

    public function deleteSlider($Slider_id)
    {
        if ($Slider_id && ctype_digit($Slider_id)) {
            $slider = TopSlider::find($Slider_id);
            if ($slider && $slider instanceof TopSlider) {
                $slider->delete();
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
        $imageinput = request()->file('imageU');
        if ($imageinput!="") {
        $new_image_product_name = request()->file('imageU')->getClientOriginalName();
        $result = request()->file('imageU')->move(public_path('images\productindex'),$new_image_product_name); 
        }
        if ($imageinput!="" && $result instanceof File){
            $productIndex_data['image'] ="/images/productindex/". request()->file('imageU')->getClientOriginalName();
            $productindex = productIndex::find($productindex_id);
            $productindex->update($productIndex_data);
            if ($productindex) {
                return redirect()->route('ManagementProductIndexEdit');
            }
         }
         else{
            $productindex = productIndex::find($productindex_id);
            $productindex->update($productIndex_data);
            if ($productindex) {
                return redirect()->route('ManagementProductIndexEdit');
            }
        }   

    }
    public function details_productindex(){
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $userId = $_GET["userId"];
            $userItem = productIndex::find($userId);
            return $userItem;
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
            'email' => request()->input('email'),
            'address' => request()->input('address'),
            'Description' => request()->input('Description'),
        ];
        $imageinput = request()->file('imageU');
        if ($imageinput!="") {
            $new_image_about_name = request()->file('imageU')->getClientOriginalName();
            $result = request()->file('imageU')->move(public_path('images\about'),$new_image_about_name); 
        }
        if ($imageinput!="" && $result instanceof File){
            $About_data['profile'] ="/images/about/".request()->file('imageU')->getClientOriginalName();
            $about = AboutMember::find(1);
            $about->update($About_data);
            if ($about) {
                return redirect()->route('ManagementTahlilAbout');
            }
         }
         else{
            $about = AboutMember::find(1);
            $about->update($About_data);
            if ($about) {
                return redirect()->route('ManagementTahlilAbout');
            }
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
           $productNewItems = NewProduct::find($productNew_id);
           if($productNewItems && $productNewItems instanceof NewProduct){
            return view('ManagementViews/site/editProductNew',compact('productNewItems')); 
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
        $imageinput = request()->file('imageU');
        if ($imageinput!="") {
            $new_image_product_new_name = request()->file('imageU')->getClientOriginalName();
            $result = request()->file('imageU')->move(public_path('images\newproduct'),$new_image_product_new_name);
        }
        if ($imageinput!="" && $result instanceof File){
            $productNew_data['image'] ="/images/newproduct/".request()->file('imageU')->getClientOriginalName();
            $productNew = NewProduct::find($productNew_id);
            $productNew->update($productNew_data);
            if ($productNew) {
                return redirect()->route('ManagementTahlilProductNew');
            }
         }
         else{
                $productNew = NewProduct::find($productNew_id);
                $productNew->update($productNew_data);
                if ($productNew) {
                    return redirect()->route('ManagementTahlilProductNew');
                }
            }
        }
        public function detailsNewProduct(){
            if (\Illuminate\Support\Facades\Request::ajax()) {
                $userId = $_GET["userId"];
                $userItem = NewProduct::find($userId);
                return $userItem;
            }
        }
/*************END TAHLIL PRODUCT NEW***************/

/*************START TAHLIL PAGE BLOG****************/
    public function TahlilBlog(){
        $informationblogs = InformationBlog::paginate(7);
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
        $imageinput = request()->file('imageU');
        if ($imageinput!="") {
            $new_image_product_blog_name = request()->file('imageU')->getClientOriginalName();
            $result = request()->file('imageU')->move(public_path('images\blog'),$new_image_product_blog_name);    
        }
        if ($imageinput!="" && $result instanceof File){
            $informationblog_data['image'] ="/images/blog/". request()->file('imageU')->getClientOriginalName();
            $informationblog = InformationBlog::find($Blog_id);
            $informationblog->update($informationblog_data);
            if ($informationblog) {
                return redirect()->route('ManagementTahlilBlog');
            }
         }
         else{
            $informationblog = InformationBlog::find($Blog_id);
            $informationblog->update($informationblog_data);
            if ($informationblog) {
                return redirect()->route('ManagementTahlilBlog');
            }
         }
        
    }
 
    public function detailsblog(){
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $userId = $_GET["userId"];
            $userItem = InformationBlog::find($userId);
            return $userItem;
        }
    }

/*************END TAHLIL PAGE BLOG****************/



    public function filteringPrice(){
        $priceproducts = price::paginate(7);
        return view('ManagementViews/site/filteringPrice', compact('priceproducts'));
    }
    public function FilteringPriceEdit($Filtering_id){
        if($Filtering_id && ctype_digit($Filtering_id)){
            $price = price::find($Filtering_id);
            if($price && $price instanceof price){
             return view('ManagementViews/site/editFilteringPrice',compact('price'));
            }
         }
    }
    public function FilteringPriceUpdate($Filtering_id){
        $filter_data = [
            'price' => request()->input('price'),
        ];
        $price = price::find($Filtering_id);
        $price->update($filter_data);
        if ($price) {
            return redirect()->route('filtering.price');
        }
    }
    public function filteringPriceAdd(){
        $dastebandis = categories::all();
        $priceproducts = price::all();
        return view('ManagementViews/site/AddFiltering', compact('priceproducts','dastebandis'));
    }
    public function createFilter(Request $request){
      $Create_Filter = [
        'price' => request()->input('price'),
        'category_id' => request()->input('categories'),
       ];

       $new_Filter_object = price::create($Create_Filter);
       if ($new_Filter_object) {
           return redirect()->route('filtering.price');
       }
  }

  public function deleteFilter($Filter_id){
    if ($Filter_id && ctype_digit($Filter_id)) {
        $Filter = price::find($Filter_id);
        if ($Filter && $Filter instanceof price) {
            $Filter->delete();
            return redirect()->route('filtering.price');
        }
    }
  }
/*****************************start page categoriesR******************************/
  public function ManagementAddCategories(){
    $dastebandis = categories::all();
    $priceproducts = price::all();
    return view('ManagementViews/site/AddFiltering', compact('priceproducts','dastebandis'));
  }
  public function createCategories(){
    $Create_Filter = [
        'dastebandi' => request()->input('dastebandi'),
       ];

       $new_Filter_object = categories::create($Create_Filter);
       if ($new_Filter_object) {
           return redirect()->route('filtering.categories');
       }
  }
    public function filteringCategories(){
        $dastebandis = categories::paginate(7);
        return view('ManagementViews/site/categories', compact('dastebandis'));
    }

    public function filteringCategoriesEdit($dastebandi_id)
    {
        if($dastebandi_id && ctype_digit($dastebandi_id)){
            $dastebandi = categories::find($dastebandi_id);
            if($dastebandi && $dastebandi instanceof categories){
                return view('ManagementViews/site/editcategories',compact('dastebandi'));
            }
        }
    }
    public function FilteringCategoriesUpdate($dastebandi_id){
        $filter_data = [
            'dastebandi' => request()->input('dastebandi'),
        ];
        $dastebandi = categories::find($dastebandi_id);
        $dastebandi->update($filter_data);
        if ($dastebandi) {
            return redirect()->route('filtering.categories');
        }
    }
    public function deletecategories($categories_id){
        if ($categories_id && ctype_digit($categories_id)) {
            $categories = categories::find($categories_id);
            if ($categories && $categories instanceof categories) {
                $categories->delete();
                return redirect()->route('filtering.categories');
            }
        }
    }
/*****************************end page categoriesR******************************/
    public function NewslettersShow(){
        $Newsletters = Newsletters::paginate(7);
        return view('ManagementViews/site/newsLetters',compact('Newsletters'));
    }

    public function Newsletters_delete($newsletters_id)
    {
        if ($newsletters_id && ctype_digit($newsletters_id)) {
            $newsletters = Newsletters::find($newsletters_id);
            if ($newsletters && $newsletters instanceof Newsletters) {
                $newsletters->delete();
                return redirect()->route('NewslettersShow');
            }
        }
    }

    public function ExportNewsletters()
    {
        $headings = [
            'id',
            'email',
        ];
        return Excel::download(new NewslettersExport($headings), 'Newsletters.xlsx');
    }
}
