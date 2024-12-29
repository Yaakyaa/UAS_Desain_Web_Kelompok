<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalBranding;

class PersonalBrandingController extends Controller
{
    public function welcome()
    {
        $personalBrandData = PersonalBranding::all();
        return view('index', compact('personalBrandData'));
    }
}
