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
    public function deleteMassages($massages_id)
    {
        if ($massages_id && ctype_digit($massages_id)) {
            $massage = MassagesManagement::find($massages_id);
            if ($massage && $massage instanceof MassagesManagement) {
                $massage->delete();
                return redirect()->route('massagesManagement');
            }
        }
    }
}
