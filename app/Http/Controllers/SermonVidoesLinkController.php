<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sermonvideolink;
use Illuminate\Http\Request;

class SermonVidoesLinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $sermonvidoes = Sermonvideolink::get();
        return view('backend.youtubesermonvidoes.index', compact('sermonvidoes'));
    }

    public function Add()
    {
        return view('backend.youtubesermonvidoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sermon_title' => 'required',
            'sermon_vidoe_link' => 'required',
        ]);
        Sermonvideolink::create([
            'sermon_title' => $request->sermon_title,
            'sermon_vidoe_link' => $request->sermon_vidoe_link,
            'sermon_date'=> $request->sermon_date,
            'created_at' => now(),
        ]);
        $notification = [
            'message' => 'sermonvidoes Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-sermon-vidoe-link')->with($notification);
    }

    public function Edit($uuid)
    {
        $sermonvidoes = Sermonvideolink::where('uuid', $uuid)->first();
        if (!$sermonvidoes) {
            abort(404);
        }
        return view('backend.youtubesermonvidoes.edit', compact('sermonvidoes'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $sermonvidoes = Sermonvideolink::where('uuid', $uuid)->first();
        if (!$sermonvidoes) {
            abort(404);
        }
        $sermonvidoes->sermon_title = $request->sermon_title;
        $sermonvidoes->sermon_vidoe_link = $request->sermon_vidoe_link;
        $sermonvidoes->save();
        $notification = [
            'message' => 'sermonvidoes Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-sermon-vidoe-link')->with($notification);

    }

    public function Delete($uuid)
    {
        $sermonvidoes = Sermonvideolink::where('uuid', $uuid)->first();
        if (!$sermonvidoes) {
            abort(404);
        }
        $sermonvidoes->delete();
        $notification = [
            'message' => 'sermonvidoes Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
