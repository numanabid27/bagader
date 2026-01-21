<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        return view('front.index');
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('front.about');
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('front.contact');
    }

    public function privacyPolicy(): View
    {
        return view('front.privacy-policy');
    }

    public function termsAndCondition(): View
    {
        return view('front.terms-and-condition');
    }

    public function faq(): View
    {
        return view('front.faq');
    }
}
