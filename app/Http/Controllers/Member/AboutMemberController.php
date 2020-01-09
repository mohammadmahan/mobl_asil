<?php

namespace App\Http\Controllers\Member;

use App\Models\AboutMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMemberController extends Controller
{
    public function aboutMember()
    {
        $aboutmembers = AboutMember::all();
        return view('memberViews/about', compact('aboutmembers'));
    }
}
