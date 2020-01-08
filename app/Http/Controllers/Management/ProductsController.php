<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function AllProducts()
    {
        return view('ManagementViews/site/products');
    }
}
