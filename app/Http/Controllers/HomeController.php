<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookNow;
use App\Models\Branch;
use App\Models\TeamMember;
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
        $teamMembers = TeamMember::all();
        return view('frontend.about',compact('teamMembers'));
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

    public function submitBook(Request $request)
    {
        $bookNow = new BookNow();
        $bookNow->name = $request->name;
        $bookNow->city = $request->city;
        $bookNow->qualification = $request->qualification;
        $bookNow->phone = $request->phone;
        $bookNow->booking_date = $request->booking_date;
        $bookNow->save();
        return redirect()->back()->with('success', 'Your booking request has been submitted successfully. We will contact you soon.');

    }
}
