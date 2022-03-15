<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    public function index()
    {
        return view('frontend.company-profile');
    }
}
