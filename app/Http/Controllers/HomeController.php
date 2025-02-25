<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookNow;
use App\Models\Branch;
use App\Models\GalleryModel;
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

    public function gallery()
    {
        $galleries = GalleryModel::all();
        return view('frontend.gallery',compact('galleries'));
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

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:10,15',
            'as_per' => 'required|string|max:255',
            'dob' => 'required|date',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'upn' => 'required|string|max:255',
            'p_sch_name' => 'required|string|max:255',
            'p_sch_graduation' => 'required|date',
            'p_location' => 'required|string|max:255',
            'ssc_name' => 'required|string|max:255',
            'ssc_date_exp' => 'required|date',
            'ssc_location' => 'required|string|max:255',
            'hsc_name' => 'required|string|max:255',
            'hsc_date_exp' => 'required|date',
            'hsc_location' => 'required|string|max:255',

            // Image Validation
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB file

            // Document Validation
            'document' => 'required|file|mimes:pdf,doc,docx|max:5120', // Max 5MB file
        ]);
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
