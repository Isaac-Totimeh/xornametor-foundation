<?php

declare (strict_types = 1);

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Rank;
use App\Models\Staff;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $staff = Staff::get();
        return view('backend.staff.index', compact('staff'));
    }

    public function Add()
    {
        $ranks = Rank::all();
        $appointment = Appointment::all();
        return view('backend.staff.create', compact('ranks', 'appointment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rank_name' => 'required',
            'staff_name' => 'required',
            'appointment_name' => 'required',
            'about' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(3700,2460);
            $img->save(public_path('upload/staff/' . $name_gen));
            $save_url = 'upload/staff/' . $name_gen;
            Staff::create([
                'rank_name' => $request->rank_name,
                'about' => $request->about,
                'staff_name' => $request->staff_name,
                'appointment_name' => $request->appointment_name,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Staff Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-staff')->with($notification);
        }
    }

    public function Edit($uuid)
    {
        $staff = Staff::where('uuid', $uuid)->first();
        if (!$staff) {
            abort(404);
        }
        $ranks = Rank::all();
        $appointment = Appointment::all();
        return view('backend.staff.edit', compact('staff', 'ranks', 'appointment'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $staff = Staff::where('uuid', $uuid)->first();
        if (!$staff) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(3700,2460);
            $img->save(public_path('upload/staff/' . $name_gen));
            $save_url = 'upload/staff/' . $name_gen;
            $staff->image = $save_url;
        }
        $staff->rank_name = $request->rank_name;
        $staff->about = $request->about;
        $staff->staff_name = $request->staff_name;
        $staff->appointment_name = $request->appointment_name;
        $staff->save();
        $notification = [
            'message' => 'Staff Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-staff')->with($notification);

    }

    public function Delete($uuid)
    {
        $staff = Staff::where('uuid', $uuid)->first();
        if (!$staff) {
            abort(404);
        }
        $staff->delete();
        $notification = [
            'message' => 'Staff Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
