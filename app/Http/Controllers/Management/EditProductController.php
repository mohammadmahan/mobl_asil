<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

class EditProductController extends Controller
{
   public function EditProduct(){
    return view('ManagementViews/site/editproduct');
   }
}
