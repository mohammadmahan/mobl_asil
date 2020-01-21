<?php

namespace App\Http\Controllers\Member;

use App\Models\AboutMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMemberController extends Controller
{
    public function aboutMember()
    {
        $Abouts = AboutMember::all();
        return view('memberViews/about', compact('Abouts'));
    }
}
