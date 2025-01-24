<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Chaplian;
use App\Models\Rank;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ChaplainsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function View()
    {
        $participant = Chaplian::get();
        return view('backend.chaplians.index', compact('participant'));
    }
    public function Add()
    {
        $ranks = Rank::all();
        return view('backend.chaplians.create', compact('ranks'));
    }
    public function Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'chaplain_name' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(200, 200);
            $img->save(public_path('upload/chaplain/' . $name_gen));
            $save_url = 'upload/chaplain/' . $name_gen;
            Chaplian::create([
                'title' => $request->title,
                'chaplain_name' => $request->chaplain_name,
                'designation' => $request->designation,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Participant Inserted Successfully',
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

    public function Edit($uuid)
    {
        $participant = Chaplian::where('uuid', $uuid)->first();
        if (!$participant) {
            abort(404);
        }
        $ranks = Rank::all();
        return view('backend.chaplians.edit', compact('participant', 'ranks'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $participant = Chaplian::where('uuid', $uuid)->first();
        if (!$participant) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(370,246);
            $img->save(public_path('upload/chaplain/' . $name_gen));
            $save_url = 'upload/chaplain/' . $name_gen;
            $participant->image = $save_url;
        }
        $participant->title = $request->title;
        $participant->chaplain_name = $request->chaplain_name;
        $participant->designation = $request->designation;
        $participant->save();
        $notification = [
            'message' => 'Partcipant Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-participant')->with($notification);
    }

    public function Delete($uuid)
    {
        $participant = Chaplian::where('uuid', $uuid)->first();
        if (!$participant) {
            abort(404);
        }
        $participant->delete();
        $notification = [
            'message' => 'Rank Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
