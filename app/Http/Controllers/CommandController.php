<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Commandant;
use App\Models\Rank;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CommandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function View()
    {
        $commandants = Commandant::get();
        return view('backend.commandant.index', compact('commandants'));
    }
    public function Add()
    {
        $ranks = Rank::all();
        return view('backend.commandant.create', compact('ranks'));
    }
    public function Store(Request $request)
    {
        $request->validate([
            'rank_name' => 'required',
            'rank_star' => 'required',
            'commandant_name' => 'required',
            'about_commandant' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(3000, 2500);
            $img->save(public_path('upload/commandant/' . $name_gen));
            $save_url = 'upload/commandant/' . $name_gen;
            Commandant::create([
                'rank_name' => $request->rank_name,
                'rank_star' => $request->rank_star,
                'commandant_name' => $request->commandant_name,
                'about_commandant' => $request->about_commandant,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Commandant Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-commandants')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $commandants = Commandant::where('uuid', $uuid)->first();
        if (!$commandants) {
            abort(404);
        }
        $ranks = Rank::all();
        return view('backend.commandant.edit', compact('commandants', 'ranks'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $commandants = Commandant::where('uuid', $uuid)->first();
        if (!$commandants) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(3000, 2500);
            $img->save(public_path('upload/commandant/' . $name_gen));
            $save_url = 'upload/commandant/' . $name_gen;
            $commandants->image = $save_url;
        }
        $commandants->rank_name = $request->rank_name;
        $commandants->rank_star = $request->rank_star;
        $commandants->commandant_name = $request->commandant_name;
        $commandants->about_commandant = $request->about_commandant;
        $commandants->save();
        $notification = [
            'message' => 'Commandant Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-commandants')->with($notification);
    }

    public function Delete($uuid)
    {
        $commandants = Commandant::where('uuid', $uuid)->first();
        if (!$commandants) {
            abort(404);
        }
        $commandants->delete();
        $notification = [
            'message' => 'Rank Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
