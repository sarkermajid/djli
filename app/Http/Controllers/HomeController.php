<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
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
        $branches = Branch::all();
        return view('frontend.home',compact('branches'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function branches()
    {
        $branches = Branch::all();
        return view('frontend.branches',compact('branches'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function applyNow()
    {
        return view('frontend.apply_now');
    }
    public function bookNow()
    {
        return view('frontend.book_now');
    }
}
