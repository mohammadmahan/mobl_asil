<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TahlilSystemController extends Controller
{
    public function TahlilSystem(){
        return view('ManagementViews/site/tahlilsystem');
    }
    public function TahlilSlider(){
        return view('ManagementViews/site/tahlilSlider');
    }
    public function TahlilProduct(){
        return view('ManagementViews/site/tahlilProduct');
    }
    public function TahlilAboout(){
        return view('ManagementViews/site/tahlilAbout');
    }
    public function TahlilProductNew(){
        return view('ManagementViews/site/tahlilProductNew');
    }
    public function TahlilBlog(){
        return view('ManagementViews/site/tahlilBlog');
    }
}
