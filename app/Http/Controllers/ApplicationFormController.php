<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApplicationForm;
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
        return view('admin.application-form.view-application-form',compact('applicationForm'));
    }
}
