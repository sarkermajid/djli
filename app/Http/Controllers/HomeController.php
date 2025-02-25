<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApplicationForm;
use App\Models\BookNow;
use App\Models\Branch;
use App\Models\FamilyMember;
use App\Models\GalleryModel;
use App\Models\JapaneseExam;
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
        // dd($request->all());
        $request->validate([
            'as_per' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB file

            // Document Validation
            'document' => 'required|file|mimes:pdf,doc,docx|max:5120', // Max 5MB file

        ]);

        $applicationForm = new ApplicationForm();
        $applicationForm->as_per = $request->as_per;
        $applicationForm->name = $request->name;
        $applicationForm->email = $request->email;
        $applicationForm->phone = $request->phone;
        $applicationForm->dob = $request->dob;
        $applicationForm->present_address = $request->present_address;
        $applicationForm->permanent_address = $request->permanent_address;
        $applicationForm->upn = $request->upn;
        $applicationForm->date_issue = $request->date_issue;
        $applicationForm->date_expiration = $request->date_expiration;
        $applicationForm->p_sch_name = $request->p_sch_name;
        $applicationForm->p_sch_graduation = $request->p_sch_graduation;
        $applicationForm->p_location = $request->p_location;
        $applicationForm->ssc_name = $request->ssc_name;
        $applicationForm->ssc_date_exp = $request->ssc_date_exp;
        $applicationForm->ssc_location = $request->ssc_location;
        $applicationForm->hsc_name = $request->hsc_name;
        $applicationForm->hsc_date_exp = $request->hsc_date_exp;
        $applicationForm->hsc_location = $request->hsc_location;
        $applicationForm->bsc_name = $request->bsc_name;
        $applicationForm->bsc_date_exp = $request->bsc_date_exp;
        $applicationForm->bsc_location = $request->bsc_location;
        $applicationForm->msc_name = $request->msc_name;
        $applicationForm->msc_date_exp = $request->msc_date_exp;
        $applicationForm->msc_location = $request->msc_location;
        $applicationForm->apply_before = $request->apply_before;
        $applicationForm->s_name = $request->s_name;
        $applicationForm->s_phone = $request->s_phone;
        $applicationForm->s_address = $request->s_address;
        $applicationForm->company_name = $request->company_name;

        // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/applicants_img', $imageName);
            $save_url = 'uploads/applicants_img/' . $imageName;
            $applicationForm->image = $save_url;
        }

        // Document upload
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentName = hexdec(uniqid()) . '.'. $document->getClientOriginalExtension();
            $document->move('uploads/applicants_doc', $documentName);
            $save_url = 'uploads/applicants_doc/'. $documentName;
            $applicationForm->document = $save_url;
        }

        $applicationForm->save();

        $japaneaseExamCount = count($request->exam_name);
        if($japaneaseExamCount != null){
            for($i = 0; $i < $japaneaseExamCount; $i++){
                $japaneaseExam = new JapaneseExam();
                $japaneaseExam->application_id = $applicationForm->id;
                $japaneaseExam->exam_name = $request->exam_name[$i];
                $japaneaseExam->exam_year = $request->exam_year[$i];
                $japaneaseExam->result = $request->result[$i];
                $japaneaseExam->save();
            }
        }

        $familyMemberCount = count($request->fm_name);
        if($familyMemberCount!= null){
            for($i = 0; $i < $familyMemberCount; $i++){
                $familyMember = new FamilyMember();
                $familyMember->application_id = $applicationForm->id;
                $familyMember->name = $request->fm_name[$i];
                $familyMember->relationship = $request->relationship[$i];
                $familyMember->dob = $request->fm_dob[$i];
                $familyMember->occupation = $request->occupation[$i];
                $familyMember->save();
            }
        }

        return redirect()->back()->with('success', 'Your Application has been submitted successfully. We will contact you soon.');

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
