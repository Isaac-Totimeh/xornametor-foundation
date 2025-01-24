<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $community = Community::get();
        return view('backend.communities.index', compact('community'));
    }

    public function Add()
    {
        return view('backend.communities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Community::create([
            'title' => $request->title,
            'body' => $request->body,
            'created_at' => now(),
        ]);
        $notification = [
            'message' => 'community Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-communities')->with($notification);
    }

    public function Edit($uuid)
    {
        $community = Community::where('uuid', $uuid)->first();
        if (!$community) {
            abort(404);
        }
        return view('backend.communities.edit', compact('community'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $community = Community::where('uuid', $uuid)->first();
        if (!$community) {
            abort(404);
        }
        $community->title = $request->title;
        $community->body = $request->body;
        $community->save();
        $notification = [
            'message' => 'community Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-communities')->with($notification);

    }

    public function Delete($uuid)
    {
        $community = Community::where('uuid', $uuid)->first();
        if (!$community) {
            abort(404);
        }
        $community->delete();
        $notification = [
            'message' => 'community Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
