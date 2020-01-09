<?php

namespace App\Http\Controllers\Member;

use App\ContactMember;
use App\Models\AboutMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMemberController extends Controller
{
    public function ContactMember(){
        return view('memberViews/contact');
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
            return redirect()->route('contactMember');
        }
    }
}
