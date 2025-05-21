<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('id', 'desc')->get();
        return view('admin.notice.all-notice', compact('notices'));
    }

    public function noticeAdd()
    {
        return view('admin.notice.add-notice');
    }

    public function noticeStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/notices', $imageName);
            $save_url = 'uploads/notices/' . $imageName;
            $notice->image = $save_url;
        }
        $notice->save();
        $notification = array(
            'message' => 'Notice Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('notice.all')->with($notification);
    }
    public function noticeView($id)
    {
        $notice = Notice::find($id);
        return view('admin.notice.view-notice', compact('notice'));
    }

    public function noticeEdit($id)
    {
        $notice = Notice::find($id);
        return view('admin.notice.edit-notice', compact('notice'));
    }

    public function noticeUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        // Image upload
        if ($request->hasFile('image')) {
            if (file_exists($notice->image)) {
                unlink($notice->image);
            }
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/notices', $imageName);
            $save_url = 'uploads/notices/' . $imageName;
            $notice->image = $save_url;
        }
        $notice->save();
        $notification = array(
            'message' => 'Notice Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('notice.all')->with($notification);
    }

    public function noticeDelete($id)
    {
        $notice = Notice::find($id);
        if (file_exists($notice->image)) {
            unlink($notice->image);
        }
        $notice->delete();
        $notification = array(
            'message' => 'Notice Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('notice.all')->with($notification);
    }
}
