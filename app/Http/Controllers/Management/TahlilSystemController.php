<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TahlilSystemController extends Controller
{
    public function TahlilSystem(){
        return view('ManagementViews/site/tahlilsystem');
    }
}
