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
        $request->validate([
            'branch_name' => 'required|string|max:255',
            'director_name' => 'nullable|string|max:255',
            'address' => 'required|string|max:500',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'email' => 'nullable|email|max:255|unique:branches,email',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $branch = new Branch();
        $branch->branch_name = $request->branch_name;
        $branch->director_name = $request->director_name;
        $branch->address = $request->address;
        $branch->phone = $request->phone;
        $branch->email = $request->email;
       // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/branches', $imageName);
            $save_url = 'uploads/branches/' . $imageName;
            $branch->image = $save_url;
        }
        $branch->save();
        $notification = array(
            'message' => 'Branch Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('branches.all')->with($notification);
    }

    public function branchView($id)
    {
        $branch = Branch::find($id);
        return view('admin.branches.view-branch', compact('branch'));
    }

    public function branchDelete($id)
    {
        $branch = Branch::find($id);
        if(file_exists($branch->image)){
            unlink($branch->image);
        }
        $branch->delete();
        $notification = array(
            'message' => 'Branch Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('branches.all')->with($notification);
    }
}
