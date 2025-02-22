<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookNow;
use Illuminate\Http\Request;

class ConsultancyBookController extends Controller
{
    public function index()
    {
        $consultancyBooksData = BookNow::all();
        return view('admin.consultancy.all-consultancy',compact('consultancyBooksData'));
    }

    public function consultancyDelete($id)
    {
        $consultancyBookData = BookNow::find($id);
        $consultancyBookData->delete();
        $notification = array(
            'message' => 'Consultancy Book Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('consultancies.all')->with($notification);
    }
}
