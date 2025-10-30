<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function viewPrivacyPolicy()
    {
        return view('pages.privacy');
    }

    public function viewTermsConditions()
    {
        return view('pages.terms');
    }
}
