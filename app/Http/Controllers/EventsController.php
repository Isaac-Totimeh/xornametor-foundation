<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function View()
    {
        $events = Event::get();
        return view('backend.event.index', compact('events'));
    }

    public function Add()
    {
        return view('backend.event.create');
    }
    public function Store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'event_date' => 'required',
            'venue' => 'required',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(370, 246);
            $img->save(public_path('upload/event/' . $name_gen));
            $save_url = 'upload/event/' . $name_gen;
            Event::create([
                'body' => $request->body,
                'event_date' => $request->event_date,
                'venue' => $request->venue,
                'event_time' => $request->event_time,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Events Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-events')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $event = Event::where('uuid', $uuid)->first();
        if (!$event) {
            abort(404);
        }
        return view('backend.event.edit', compact('event'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $event = Event::where('uuid', $uuid)->first();
        if (!$event) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(370, 246);
            $img->save(public_path('upload/event/' . $name_gen));
            $save_url = 'upload/event/' . $name_gen;
            $event->image = $save_url;
        }
        $event->body = $request->body;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->venue = $request->venue;
        $event->save();
        $notification = [
            'message' => 'Event Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-events')->with($notification);
    }

    public function Delete($uuid)
    {
        $event = Event::where('uuid', $uuid)->first();
        if (!$event) {
            abort(404);
        }
        $event->delete();
        $notification = [
            'message' => 'Staff Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
