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

    public function applicationDelete($id)
    {
        $applicationForm = ApplicationForm::find($id);
        // Delete related Japanese Exams
        JapaneseExam::where('application_id', $applicationForm->id)->delete();
        // Delete related Family Members
        FamilyMember::where('application_id', $applicationForm->id)->delete();
        // Delete Image File (if exists)
        if (!empty($applicationForm->image) && file_exists(public_path($applicationForm->image))) {
            unlink(public_path($applicationForm->image));
        }
        // Delete Document File (if exists)
        if (!empty($applicationForm->document) && file_exists(public_path($applicationForm->document))) {
            unlink(public_path($applicationForm->document));
        }
        // Delete Application Form
        $applicationForm->delete();

        $notification = array(
            'message' => 'Application Form Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
