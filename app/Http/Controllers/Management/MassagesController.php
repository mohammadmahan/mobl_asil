<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MassagesController extends Controller
{
    public function AllMassages (){
        return view('ManagementViews/site/massages');
    }
}
