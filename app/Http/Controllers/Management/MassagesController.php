<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\MassagesManagement;
use Illuminate\Http\Request;

class MassagesController extends Controller
{
    public function AllMassages (){
        $massages = MassagesManagement::all();
        return view('ManagementViews/site/massages',compact('massages'));
    }
}
