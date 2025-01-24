<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $gallery = Gallery::get();
        return view('backend.gallery.index', compact('gallery'));
    }

    public function Add()
    {
        return view('backend.gallery.create');
    }
    public function view_gallery()
    {
        $gallery = Gallery::get();
        return view('backend.gallery.view', compact('gallery'));
    }
    public function Store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(370, 246);
            $img->save(public_path('upload/gallery/' . $name_gen));
            $save_url = 'upload/gallery/' . $name_gen;
            Gallery::create([
                        'image' => $save_url,
                        'created_at' => now(),
                    ]);
            $notification = [
                'message' => 'Image Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-participant')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    // public function Edit($uuid)
    // {
    //     $event = Gallery::where('uuid', $uuid)->first();
    //     if (!$event) {
    //         abort(404);
    //     }
    //     return view('backend.gallery.edit', compact('event'));
    // }

    // public function Update(Request $request)
    // {
    //     $uuid = $request->uuid;
    //     $event = Gallery::where('uuid', $uuid)->first();
    //     if (!$event) {
    //         abort(404);
    //     }
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $name_gen = time() . '.' . $image->getClientOriginalExtension();
    //         if ($image->storeAs('upload/gallery', $name_gen, 'public')) {
    //             if ($event->image) {
    //                 Storage::disk('public')->delete($event->image);
    //             }
    //             $event->update([
    //                 'image' => 'upload/gallery/' . $name_gen,
    //             ]);
    //         }
    //     }
    //     $notification = [
    //         'message' => 'Gallery Updated Successfully',
    //         'alert-type' => 'success',
    //     ];
    //     return redirect()->route('view-events')->with($notification);
    // }


    public function Delete($uuid)
    {
        $event = Gallery::where('uuid', $uuid)->first();
        if (!$event) {
            abort(404);
        }
        $event->delete();
        $notification = [
            'message' => 'Gallery Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
