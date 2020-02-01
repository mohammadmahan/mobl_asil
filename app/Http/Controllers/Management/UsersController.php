<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login()
    {
        return view('ManagementViews/login/login');
    }

    public function doLogin(Request $request)
    {
        $remember = $request->has('remember-me');
        if(Auth::attempt(['email' => $request->input('user-name'),'password'=> $request->input('user-password')],$remember)){
            return redirect('/ManagementDashboard');
        }
            return redirect()->back()->with('loginError','ایمیل یا کلمه عبور اشتباه میباشد');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/management/login');
    }
}
