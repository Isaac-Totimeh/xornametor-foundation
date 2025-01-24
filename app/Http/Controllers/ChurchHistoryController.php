<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\Models\ChurchHistory;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ChurchHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $news = ChurchHistory::get();
        return view('backend.news.index', compact('news'));
    }

    public function Add()
    {
        return view('backend.news.create');
    }
    public function Store(Request $request)
    {
        $request->validate([
            'body' => 'required',

        ]);
        ChurchHistory::create([
            'body' => $request->body,
            'created_at' => now(),
        ]);
        $notification = [
            'message' => 'News Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-news')->with($notification);
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $news = ChurchHistory::where('uuid', $uuid)->first();
        if (!$news) {
            abort(404);
        }
        return view('backend.news.edit', compact('news'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $news = ChurchHistory::where('uuid', $uuid)->first();
        if (!$news) {
            abort(404);
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img->resize(370, 246);
            $img->save(public_path('upload/staff/' . $name_gen));
            $save_url = 'upload/staff/' . $name_gen;
            $news->image = $save_url;
        }
        $news->body = $request->body;
        $news->news_date = $request->news_date;
        $news->venue = $request->venue;
        $news->save();
        $notification = [
            'message' => 'News Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-news')->with($notification);
    }

    public function Delete($uuid)
    {
        $news = ChurchHistory::where('uuid', $uuid)->first();
        if (!$news) {
            abort(404);
        }
        $news->delete();
        $notification = [
            'message' => 'News Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
