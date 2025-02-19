<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function djliLogin()
    {
        if(auth()->user()){
            return view('admin.admin_dashboard');
        }else{
            return view('frontend.login');
        }
    }
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function branches()
    {
        return view('frontend.branches');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function applyNow()
    {
        return view('frontend.apply_now');
    }
}
