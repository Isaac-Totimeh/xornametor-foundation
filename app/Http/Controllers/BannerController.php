<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $banner = Banner::get();
        return view('backend.banner.index', compact('banner'));
    }

    public function Add()
    {
        return view('backend.banner.create');
    }
    public function view_banner()
    {
        $banner = Banner::get();
        return view('backend.banner.view', compact('banner'));
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
            // $img = $img->resize(5442, 3633);
            $img->save(public_path('upload/banner/' . $name_gen));
            $save_url = 'upload/banner/' . $name_gen;
            Banner::create([
                'title' => $request->title,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Image Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-banner')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Delete($uuid)
    {
        $event = Banner::where('uuid', $uuid)->first();
        if (!$event) {
            abort(404);
        }
        $event->delete();
        $notification = [
            'message' => 'banner Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
