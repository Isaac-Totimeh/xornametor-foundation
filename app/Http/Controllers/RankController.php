<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Rank;

class RankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $ranks = Rank::get();
        return view('backend.rank.index', compact('ranks'));
    }

    public function RankAdd()
    {
        return view('backend.rank.create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'rank_name' => ['required', Rule::unique('ranks')],
        ]);
        Rank::create([
            'rank_name' => $request->rank_name,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Rank Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-rank')->with($notification);
    }

    public function Edit($uuid)
    {
        $rank = Rank::where('uuid', $uuid)->first();
        if (!$rank) {
            abort(404);
        }
        return view('backend.rank.edit', compact('rank'));
    }

    public function Update(Request $request, $uuid)
    {
        $rank = Rank::where('uuid', $uuid)->first();
        if (!$rank) {
            abort(404);
        }
        $rank->rank_name = $request->rank_name;
        $rank->save();
        $notification = [
            'message' => 'Rank Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-rank')->with($notification);
    }

    public function Delete($uuid)
    {
        $rank = Rank::where('uuid', $uuid)->first();
        if (!$rank) {
            abort(404);
        }
        $rank->delete();
        $notification = [
            'message' => 'Rank Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
