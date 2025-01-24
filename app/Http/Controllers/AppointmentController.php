<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $appointment = Appointment::get();
        return view('backend.appointment.index', compact('appointment'));
    }

    public function Add()
    {
        return view('backend.appointment.create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'appointment_name' => ['required', Rule::unique('appointments')],
        ]);
        Appointment::create([
            'appointment_name' => $request->appointment_name,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Appointment Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-appointment')->with($notification);
    }

    public function Edit($uuid)
    {
        $appointment = Appointment::where('uuid', $uuid)->first();
        if (!$appointment) {
            abort(404);
        }
        return view('backend.appointment.edit', compact('appointment'));
    }

    public function Update(Request $request, $uuid)
    {
        $appointment = Appointment::where('uuid', $uuid)->first();
        if (!$appointment) {
            abort(404);
        }
        $appointment->appointment_name = $request->appointment_name;
        $appointment->save();
        $notification = [
            'message' => 'Rank Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-appointment')->with($notification);
    }

    public function Delete($uuid)
    {
        $appointment = Appointment::where('uuid', $uuid)->first();
        if (!$appointment) {
            abort(404);
        }
        $appointment->delete();
        $notification = [
            'message' => 'Appointment Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
