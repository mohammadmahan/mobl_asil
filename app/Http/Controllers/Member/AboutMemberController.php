<?php

namespace App\Http\Controllers\Member;

use App\Models\AboutMember;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMemberController extends Controller
{
    public function aboutMember()
    {
        $dastebandis = categories::all();
        $Abouts = AboutMember::all();
        return view('memberViews/about', compact('Abouts','dastebandis'));
    }
}
