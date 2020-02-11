<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    public function Newsletters()
    {
        $Newsletters_data = [
            'email' => request()->input('email')
        ];
        $new_Newsletters_object = Newsletters::create($Newsletters_data);
        if ($new_Newsletters_object && $new_Newsletters_object instanceof Newsletters) {
            return redirect()->back();
        }
    }
}
