<?php

namespace App\Http\Controllers;

use App\Models\AboutMember;
use Illuminate\Http\Request;

class AboutMemberController extends Controller
{
    public function aboutMember()
    {
        $aboutmembers = AboutMember::all();
        return view('memberViews/about', compact('aboutmembers'));
    }
}
