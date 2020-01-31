<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function login()
    {
        return view('ManagementViews/login/login');
    }
}
