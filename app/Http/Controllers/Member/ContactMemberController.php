<?php

namespace App\Http\Controllers\Member;

use App\ContactMember;
use App\Models\AboutMember;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMemberController extends Controller
{
    public function ContactMember(){
        $Abouts = AboutMember::all();
        $dastebandis = categories::all();
        return view('memberViews/contact', compact('Abouts','dastebandis'));
    }

    public function createContactMember(Request $request)
    {
        $Contact_data = [
            'fullname' => request()->input('fullname'),
            'number' => request()->input('number'),
            'email' => request()->input('email'),
            'massage' => request()->input('massage'),
        ];
        $new_Contact_object = ContactMember::create($Contact_data);
        if ($new_Contact_object && $new_Contact_object instanceof ContactMember) {
            return redirect()->back()->with('contactsError','پیغام شما با موفقیت ثبت شد');
        }
    }
}
