<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\MassagesManagement;
use Illuminate\Http\Request;

class MassagesController extends Controller
{
    public function AllMassages (){
        $massages = MassagesManagement::paginate(7);
        return view('ManagementViews/site/massages',compact('massages'));
    }
    public function deleteMassages(Request $request)
    {
//        dd($request->massages_id);
        $massage = MassagesManagement::find($request->massages_id);
        $massage->delete();
        return back();
    }
}
