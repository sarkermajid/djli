<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = GalleryModel::all();
        return view('admin.gallery.all-gallery-images', compact('galleries'));
    }
    public function galleryImageAdd()
    {
        return view('admin.gallery.add-gallery-image');
    }

    public function galleryImageStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $gallery = new GalleryModel();
        $gallery->title = $request->title;
        // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/gallery', $imageName);
            $save_url = 'uploads/gallery/' . $imageName;
            $gallery->image = $save_url;
        }
        $gallery->save();
        $notification = array(
            'message' => 'Gallery Image Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('gallery.image.all')->with($notification);
    }

    public function galleryImageEdit($id)
    {
        $gallery = GalleryModel::find($id);
        return view('admin.gallery.edit-gallery-image', compact('gallery'));
    }

    public function galleryImageUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $gallery = GalleryModel::find($id);
        $gallery->title = $request->title;
        // Image upload
        if ($request->hasFile('image')) {
            if (file_exists($gallery->image)) {
                unlink($gallery->image);
            }
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/gallery', $imageName);
            $save_url = 'uploads/gallery/' . $imageName;
            $gallery->image = $save_url;
        }
        $gallery->save();
        $notification = array(
            'message' => 'gallery Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('gallery.image.all')->with($notification);
    }

    public function galleryImageDelete($id)
    {
        $gallery = GalleryModel::find($id);
        if (file_exists($gallery->image)) {
            unlink($gallery->image);
        }
        $gallery->delete();
        $notification = array(
            'message' => 'Gallery Image Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('gallery.image.all')->with($notification);
    }
}
