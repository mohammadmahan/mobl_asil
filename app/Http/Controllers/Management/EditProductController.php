<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
   public function EditProduct(){
    return view('ManagementViews/site/editproduct');
   }
}
