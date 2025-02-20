<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::all();
        return view('admin.branches.all-branches',compact('branches'));
    }

    public function branchAdd()
    {
        return view('admin.branches.add-branch');
    }

    public function branchStore(Request $request)
    {
        dd($request->all());
    }
}
