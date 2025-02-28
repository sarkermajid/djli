<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ApplicationFormExport;
use Maatwebsite\Excel\Facades\Excel;

class ApplicationFormExportController extends Controller
{
    public function export()
    {
        return Excel::download(new ApplicationFormExport, 'application_form.xlsx');
    }
}
