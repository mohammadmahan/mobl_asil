<?php

namespace App\Http\Controllers\Management;

use App\ContactMember;
use App\Http\Controllers\Controller;
use App\Models\MassagesManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MassagesController extends Controller
{
    public function AllMassages (){
        $massages = MassagesManagement::paginate(7);
        if(Auth::check()) {
            return view('ManagementViews/site/massages', compact('massages'));
        }
        else{
            return redirect('/management/login');
        }
    }
    public function deleteMassages(Request $request)
    {
        $massage = MassagesManagement::find($request->massages_id);
        $massage->delete();
        return back();
    }
    public function details_massage(){
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $userId = $_GET["userId"];
            $userItem = ContactMember::find($userId);
            return $userItem;
        }
    }
}
