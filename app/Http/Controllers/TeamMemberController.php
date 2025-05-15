<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('id', 'desc')->get();
        return view('admin.team.all-team-members', compact('teamMembers'));
    }
    public function teamMemberAdd()
    {
        return view('admin.team.add-team-member');
    }

    public function teamMemberStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $teamMember = new TeamMember();
        $teamMember->name = $request->name;
        $teamMember->designation = $request->designation;
        // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/teamMemberes', $imageName);
            $save_url = 'uploads/teamMemberes/' . $imageName;
            $teamMember->image = $save_url;
        }
        $teamMember->save();
        $notification = array(
            'message' => 'Team Member Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('team.members.all')->with($notification);
    }

    public function teamMemberEdit($id)
    {
        $teamMember = TeamMember::find($id);
        return view('admin.team.edit-team-member', compact('teamMember'));
    }

    public function teamMemberUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);
        $teamMember = TeamMember::find($id);
        $teamMember->name = $request->name;
        // Image upload
        if ($request->hasFile('image')) {
            if (file_exists($teamMember->image)) {
                unlink($teamMember->image);
            }
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/teamMemberes', $imageName);
            $save_url = 'uploads/teamMemberes/' . $imageName;
            $teamMember->image = $save_url;
        }
        $teamMember->save();
        $notification = array(
            'message' => 'Team Member Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('team.members.all')->with($notification);
    }

    public function teamMemberDelete($id)
    {
        $teamMember = TeamMember::find($id);
        if (file_exists($teamMember->image)) {
            unlink($teamMember->image);
        }
        $teamMember->delete();
        $notification = array(
            'message' => 'Team Member Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('team.members.all')->with($notification);
    }
}
