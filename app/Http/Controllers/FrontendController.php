<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(Request $request)
        {
            return view('frontend.home'); 
        }

    public function services(Request $request)  {
        return view('frontend.services');
    }

    public function work(Request $request) {
        return view('frontend.work');
    }

    public function contact(Request $request) { 
        return view('frontend.contactus');
    }

    public function about(Request $request) {   
        return view('frontend.about');
    }
}
