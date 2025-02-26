<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApplicationForm;
use App\Models\FamilyMember;
use App\Models\JapaneseExam;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    public function index()
    {
        $applicationForms = ApplicationForm::orderBy('id','desc')->get();
        return view('admin.application-form.all-application-form',compact('applicationForms'));
    }

    public function applicationView($id)
    {
        $applicationForm = ApplicationForm::find($id);
        $japaneseExams = JapaneseExam::where('application_id',$applicationForm->id)->get();
        $familyMembers = FamilyMember::where('application_id',$applicationForm->id)->get();
        return view('admin.application-form.view-application-form',compact('applicationForm','japaneseExams','familyMembers'));
    }
}
